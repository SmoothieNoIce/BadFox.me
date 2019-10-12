@isset($category)
@switch($category)
    @case(0)
    <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/admin/home')}}">後臺首頁</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/articleList')}}">文章</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/articleList')}}">標籤</a>
            </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/admin/contentSetting')}}">內容設定</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/admin/fullSetting')}}">主設定</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/logout')}}">登出</a>
        </li>
    </ul>
        @break
    @case(1)
    <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/admin/home')}}">後臺首頁</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="{{url('/admin/articleList')}}">文章</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/articleList')}}">標籤</a>
            </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/admin/contentSetting')}}">內容設定</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/admin/fullSetting')}}">主設定</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/logout')}}">登出</a>
        </li>
    </ul>
        @break
        @case(2)
        <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/home')}}">後臺首頁</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/articleList')}}">文章</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/admin/articleList')}}">標籤</a>
                </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/contentSetting')}}">內容設定</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/fullSetting')}}">主設定</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/logout')}}">登出</a>
            </li>
        </ul>
            @break
            @case(3)
            <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/admin/home')}}">後臺首頁</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/articleList')}}">文章</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/articleList')}}">標籤</a>
                    </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{url('/admin/contentSetting')}}">內容設定</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/admin/fullSetting')}}">主設定</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/logout')}}">登出</a>
                </li>
            </ul>
                @break
                @case(4)
                <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/admin/home')}}">後臺首頁</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/articleList')}}">文章</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/articleList')}}">標籤</a>
                        </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/admin/contentSetting')}}">內容設定</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="{{url('/admin/fullSetting')}}">主設定</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/logout')}}">登出</a>
                    </li>
                </ul>
                    @break
                    @case(5)
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('/admin/home')}}">後臺首頁</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin/articleList')}}">文章</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin/articleList')}}">標籤</a>
                            </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('/admin/contentSetting')}}">內容設定</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{url('/admin/fullSetting')}}">主設定</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/admin/logout')}}">登出</a>
                        </li>
                    </ul>
                        @break
    @default
    <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/admin/home')}}">後臺首頁</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/articleList')}}">文章</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/articleList')}}">標籤</a>
            </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/admin/contentSetting')}}">內容設定</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/admin/fullSetting')}}">主設定</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/admin/logout')}}">登出</a>
        </li>
    </ul>
@endswitch
@endisset