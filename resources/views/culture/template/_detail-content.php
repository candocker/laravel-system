<script id="no-contentReview" type="text/x-dot-template"> 
    {{~ it.noCommentData:item:index}}
    <li class="useless-comment-item">
        <!-- 个人信息 -->
        <div class="userinfo-wrap">
            <div class="header-img">
                {{? item.userPic}}
                <img src="{{= item.userPic}}" alt="">
                {{??}}
                <img src="data:image/gif;base64,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" alt="">
                {{?}}
            </div>
            <div class="user-info">
                <div class="user-name">
                    <h4>{{= item.appraiserNickname}}</h4>
                    <i class="user-rank rank-{{= item.buyerClass}}"></i>
                </div>
                <span class="release-time">{{= item.reviewTime}}</span>
                <h4 class="item-name">{{= item.itemName}}</h4>
            </div>
        </div>
        <h2 class="useless-comment-text">{{= item.content}}</h2>
        {{? item.reviewPic.length > 0}}
        <ul class="img-list imgcount-{{= item.reviewPic.length}}">
            {{~ item.reviewPic:pic:picIndex}}
            <li>
                <img src="{{= pic.normal.imgUrl}}" alt="" onerror="this.src='/dist/img/error.jpg';" >
            </li>
            {{~}}
        </ul>
        {{?}}
    </li>
    {{~}}   
</script>