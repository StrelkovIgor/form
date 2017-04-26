<nav role="navigation" class="navbar navbar-default">
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav">
                        <li ><a href="/">Главная</a></li>
                        <li><a href="/bid/new">Создать заявку</a></li>
                           @if($id)
                               <li><a href="#">У вас существует заявка: {{$id}}</a></li>
                           @endif
                      </ul>
                    </div>
                  </nav>
                  