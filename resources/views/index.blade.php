@extends('layouts.master')

@section('title','微望')
@section('heads')
    <script src = "{{ URL::asset('js/index.js') }}"></script>
    <link rel = "stylesheet" type = "text/css" href = "{{ URL::asset('style/index/main.css') }}">

@stop
@section('content')

            
        <header>
            <div class = "home-bg">
                <div class = "navigation"></div>
                <div class = "slogan">
                    <h1>微望 We Want</h1>
                    <br>
                    <h1>We want to make Taiwan better.</h1>
                </div>
            </div>
        </header>
        
        <main>
            <div class = "content">
                <div class = "project-wrappers">
                <section id = "project-popular" class = "project-wrapper">
                    <h1 class = "title">熱門項目</h1>
                    <div class = "project-header">
                        <ul class = "project-category">
                            <li id = "ball" class = "active">球類運動</li>
                            <li id = "martial-arts">技擊運動</li>
                            <li id = "track-and-field">田徑運動</li>
                            <li id = "Fitness">健體運動</li>
                            <li id = "bike">單車類</li>
                            <li id = "others">其他</li>
                        </ul>
                        <i class = "fa fa-search" aria-hidden = "true"></i>
                        <input type = "text" class = "project-search">
                    </div>
                    <div class = "mobile-project-header">
                        <select>
                            <option class = "active">棒球</option>
                            <option>籃球</option>
                            <option>排球</option>
                            <option>足球</option>
                            <option>其他</option>
                        </select>
                    </div>
                    <hr>
                    <article class = "projects row">
                        <a href = "project.html" class = "columns four test">
                            <section class = "project">
                                <div class = "project-img">
                                    <img src = "pics/IMG_4800.jpg">
                                </div>
                                <div class = "project-content">
                                    <h1>微望台灣，專題測試。</h1>

                                    <article>
                                        微望台灣，專題測試。微望台灣，專題測試。微望台灣，專題測試。微望台灣，專題測試。微望台灣，專題測試。微望台灣，專題測試。
                                    </article>
                                    <div class = "progress-bar">0%</div>
                                </div>
                            </section>
                        </a>
                        <a href = "project.html" class = "columns four">
                            <section class = "project">
                                <div class = "project-img">
                                    <img src = "pics/IMG_4826.jpg">
                                </div>
                                <div class = "project-content">
                                    <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                    <article>
                                        創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                    </article>
                                    <div class = "progress-bar">70%</div>
                                </div>
                            </section>
                        </a>
                        <a href = "project.html" class = "columns four">
                            <section class = "project">
                                <div class = "project-img">
                                    <img src = "pics/IMG_4833.jpg">
                                </div>
                                <div class = "project-content">
                                    <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                    <article>
                                        創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                    </article>
                                    <div class = "progress-bar">70%</div>
                                </div>
                            </section>
                        </a>
                    </article>
                    <article class = "projects row">
                        <a href = "project.html" class = "columns four">
                        <section class = "project">
                            <div class = "project-img">
                                <img src = "pics/IMG_4942.jpg">
                            </div>
                            <div class = "project-content">
                                <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                <article>
                                    創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                </article>
                                <div class = "progress-bar">70%</div>
                            </div>
                        </section>
                    </a>
                        <a href = "project.html" class = "columns four">
                        <section class = "project">
                            <div class = "project-img">
                                <img src = "pics/IMG_5023.jpg">
                            </div>
                            <div class = "project-content">
                                <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                <article>
                                    創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                </article>
                                <div class = "progress-bar">70%</div>
                            </div>
                        </section>
                    </a>
                        <a href = "project.html" class = "columns four">
                        <section class = "project">
                            <div class = "project-img">
                                <img src = "pics/IMG_5003.jpg">
                            </div>
                            <div class = "project-content">
                                <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                <article>
                                    創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                </article>
                                <div class = "progress-bar">70%</div>
                            </div>
                        </section>
                    </a>
                    </article>
                    <article class = "projects row">
                        <section class = "project columns four">
                            <div class = "project-img">
                                <img src = "pics/picture1.jpg">
                            </div>
                            <div class = "project-content">
                                <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                <article>
                                    創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                </article>
                                <div class = "progress-bar">70%</div>
                            </div>
                        </section>
                        <section class = "project columns four">
                            <div class = "project-img">
                                <img src = "pics/picture1.jpg">
                            </div>
                            <div class = "project-content">
                                <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                <article>
                                    創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                </article>
                                <div class = "progress-bar">70%</div>
                            </div>
                        </section>
                        <section class = "project columns four">
                            <div class = "project-img">
                                <img src = "pics/picture1.jpg">
                            </div>
                            <div class = "project-content">
                                <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                <article>
                                    創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                </article>
                                <div class = "progress-bar">70%</div>
                            </div>
                        </section>
                    </article>
                </section>

                <section id = "project-newest" class = "project-wrapper">
                    <h1 class = "title">最新項目</h1>
                    <div class = "project-header">
                        <ul class = "project-category">
                            <li id = "ball" class = "active">球類運動</li>
                            <li id = "martial-arts">技擊運動</li>
                            <li id = "track-and-field">田徑運動</li>
                            <li id = "Fitness">健體運動</li>
                            <li id = "bike">單車類</li>
                            <li id = "others">其他</li>
                        </ul>
                        <i class = "fa fa-search" aria-hidden = "true"></i>
                        <input type = "text" class = "project-search">
                    </div>
                    <hr>
                    <article class = "projects row">
                        <a href = "project.html" class = "columns four test">
                            <section class = "project">
                                <div class = "project-img">
                                    <img src = "pics/IMG_4800.jpg">
                                </div>
                                <div class = "project-content">
                                    <h1>微望台灣，專題測試。</h1>

                                    <article>
                                        微望台灣，專題測試。微望台灣，專題測試。微望台灣，專題測試。微望台灣，專題測試。微望台灣，專題測試。微望台灣，專題測試。
                                    </article>
                                    <div class = "progress-bar">0%</div>
                                </div>
                            </section>
                        </a>
                        <a href = "project.html" class = "columns four">
                            <section class = "project">
                                <div class = "project-img">
                                    <img src = "pics/IMG_4826.jpg">
                                </div>
                                <div class = "project-content">
                                    <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                    <article>
                                        創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                    </article>
                                    <div class = "progress-bar">70%</div>
                                </div>
                            </section>
                        </a>
                        <a href = "project.html" class = "columns four">
                            <section class = "project">
                                <div class = "project-img">
                                    <img src = "pics/IMG_4833.jpg">
                                </div>
                                <div class = "project-content">
                                    <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                    <article>
                                        創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                    </article>
                                    <div class = "progress-bar">70%</div>
                                </div>
                            </section>
                        </a>
                    </article>
                    <article class = "projects row">
                        <a href = "project.html" class = "columns four">
                        <section class = "project">
                            <div class = "project-img">
                                <img src = "pics/IMG_4942.jpg">
                            </div>
                            <div class = "project-content">
                                <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                <article>
                                    創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                </article>
                                <div class = "progress-bar">70%</div>
                            </div>
                        </section>
                    </a>
                        <a href = "project.html" class = "columns four">
                        <section class = "project">
                            <div class = "project-img">
                                <img src = "pics/IMG_5023.jpg">
                            </div>
                            <div class = "project-content">
                                <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                <article>
                                    創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                </article>
                                <div class = "progress-bar">70%</div>
                            </div>
                        </section>
                    </a>
                        <a href = "project.html" class = "columns four">
                        <section class = "project">
                            <div class = "project-img">
                                <img src = "pics/IMG_5003.jpg">
                            </div>
                            <div class = "project-content">
                                <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                <article>
                                    創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                </article>
                                <div class = "progress-bar">70%</div>
                            </div>
                        </section>
                    </a>
                    </article>
                    <article class = "projects row">
                        <section class = "project columns four">
                            <div class = "project-img">
                                <img src = "pics/picture1.jpg">
                            </div>
                            <div class = "project-content">
                                <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                <article>
                                    創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                </article>
                                <div class = "progress-bar">70%</div>
                            </div>
                        </section>
                        <section class = "project columns four">
                            <div class = "project-img">
                                <img src = "pics/picture1.jpg">
                            </div>
                            <div class = "project-content">
                                <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                <article>
                                    創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                </article>
                                <div class = "progress-bar">70%</div>
                            </div>
                        </section>
                        <section class = "project columns four">
                            <div class = "project-img">
                                <img src = "pics/picture1.jpg">
                            </div>
                            <div class = "project-content">
                                <h1>「信物」拆信刀組｜用信物，為你的信念開封。</h1>

                                <article>
                                    創作專輯《忽然有一天，我離開了台北》（簽名版）1張＋巡演音樂會門票2張＋專輯未收錄之隱藏版Bonus Track（完全未公開）1首。
                                </article>
                                <div class = "progress-bar">70%</div>
                            </div>
                        </section>
                    </article>
                </section>
                <div>
            </div>

            

            <div class = "notification-toggle">
                <i class="fa fa-bell" aria-hidden="true"></i>
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
            <div class = "notification"></div>
        </main>

@stop


