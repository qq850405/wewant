    @php
    $count=1
    @endphp
    @foreach($query as $var )
    @if($count % 3== 1)
        <article class = "projects row">
    @endif

        <a href = "{{url('/project/'.$var -> projectNo .'/show')}}" class = "project columns four">
            <section>
                <div class = "project-img">
                    <img src = {{'/coverImg/'.$var -> pic_path }}>
                </div>
                <div class = "project-content">
                    <h1>{{$var -> projectName}}</h1>

                    <article>
                        {{$var -> introduction}}
                    </article>
                    <div class = "progress-bar">0%</div>
                </div>
            </section>
        </a>
    @if($count %3 ==0)
    </article>
    @endif
    @php
    $count++
    @endphp
    @endforeach