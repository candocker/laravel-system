<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Elasticsearch\ClientBuilder;
use GuzzleHttp\Client;

class ESOpenCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elastic:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handleold()
    {
        $host = config('scout.elasticsearch.hosts');
        $index = config('scout.elasticsearch.index');
        $client = ClientBuilder::create()->setHosts($host)->build();
    
        if ($client->indices()->exists(['index' => $index])) {
            $this->warn("Index {$index} exists, deleting...");
            $client->indices()->delete(['index' => $index]);
        }
    
        $this->info("Creating index: {$index}");
    
        return $client->indices()->create([
            'index' => $index,
            'body' => [
                'settings' => [
                    'number_of_shards' => 1,
                    'number_of_replicas' => 0
                ],
                'mappings' => [
                    '_source' => [
                        'enabled' => true
                    ],
                    'properties' => [
                        'id' => [
                            'type' => 'long'
                        ],
                        /*'code' => [
                            'type' => 'text'
                        ],
                        'name' => [
                            'type' => 'text',
                            'analyzer' => 'ik_max_word',
                            'search_analyzer' => 'ik_smart'
                        ],
                        'description' => [
                            'type' => 'text',
                            'analyzer' => 'ik_max_word',
                            'search_analyzer' => 'ik_smart'
                        ],
                        'note' => [
                            'type' => 'text',
                            'analyzer' => 'ik_max_word',
                            'search_analyzer' => 'ik_smart'
                        ]*/
                    ],
                ]
            ]
        ]);
        return 0;
    }

    public function handle()
    {
        $client = new Client();

        $url = config('scout.elasticsearch.hosts')[0] . '/_template/laravel_tmp_1';
        $json = [
            'json' => [
                'index_patterns' => config('scout.elasticsearch.index'),
                'settings'       => [
                    'number_of_shards'   => 1,
                    'number_of_replicas' => 0,
                ],
                'mappings'       => [
                    '_doc' => [
                        '_source'           => [
                            'enabled' => true,
                        ],
                        //具体设置字段
                        'properties'        => [
                            'created_at' => [
                                'type'   => 'date',
                                'format' => 'yy-MM-dd HH:mm:ss||yy-MM-dd||epoch_millis',
                            ],
                        ],
                        'dynamic_templates' => [
                            [
                                'strings' => [
                                    'match_mapping_type' => 'string',
                                    'mapping'            => [
                                        'type'     => 'text',
                                        'analyzer' => 'ik_smart',
                                        'fields'   => [
                                            'keyword' => [
                                                'type'         => 'keyword',
                                                'ignore_above' => 256,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];
        print_r($json);exit();
        $client->put($url, );

        $this->info('创建模板成功');

        $url = config('scout.elasticsearch.hosts')[0] . '/' . config('scout.elasticsearch.index');
        $client->put($url, [
            'json' => [
                'settings' => [
                    'refresh_interval'   => '5s',
                    'number_of_shards'   => 1,
                    'number_of_replicas' => 0,
                ],
            ],
        ]);

        $this->info('创建索引成功');

        return true;
    }
}
