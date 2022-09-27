<div class="content-project">
    @if ($project->active)
        <section class="header-project mt-6">
            <div class="container wrapper-details">
                <div class="wrapper-details-icon mb-4">
                    @foreach ($project->icons_type as $type)
                        <span class='mb-4'><i class="{{ $type }}"></i></span>
                    @endforeach
                </div>
                <div class="wrapper-details-text mb-4">
                    <span class='mb-4'>
                        <strong>{{ $project->type }}</strong>&nbsp;&nbsp;-&nbsp;&nbsp;{{ $project->date }}</span>
                </div>

                <div class="wrapper-icons-tech">
                    <ul>
                        @foreach ($project->details->icons_techs as $techs)
                            <li><i class="{{ $techs }}"></i></li>
                        @endforeach
                    </ul>
                </div>

                <hr>
                <div class="wrapper-title mt-5">
                    {{-- <h1><strong>{{$project->name}} - {{$project->type}}</strong></h1> --}}
                    <h1><strong>{{ $project->name }}</strong></h1>
                    <p>{{ $project->details->description }}</p>
                    {{-- <p class="mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, similique? Voluptate
                        temporibus id vitae dignissimos eum quisquam soluta eaque eos autem officiis, in quasi dolores
                        perspiciatis reprehenderit totam, eveniet cum!
                    </p> --}}
                </div>
            </div>
        </section>

        <section class="body_avatar" id="body_avatar">

        </section>
        <section id="body-project" class="body_project mt-5">
            <div class="wrapper_banner_principal">
                <img src="https://dummyimage.com/600x400/000/fff" alt="">
            </div>

            <div class="wrapper_explanation mt-5">
                <h1>Informacion</h1>

                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda recusandae, quia cum saepe laborum aperiam cumque a, modi porro provident, minima nihil. Est tempora, expedita totam voluptatibus beatae commodi quae.
                Blanditiis deleniti, consequuntur ratione quibusdam quas excepturi minima neque unde voluptatem. Architecto, tempore facilis, nesciunt neque ab fugit earum eligendi amet ipsum vitae commodi aperiam quae similique beatae nemo sed?
                Nesciunt, facere error consequatur asperiores deleniti a placeat, sequi incidunt et in quasi. Quam itaque autem velit odit suscipit nesciunt at, assumenda quasi neque praesentium asperiores modi corrupti repellendus necessitatibus?
                Totam perspiciatis praesentium, explicabo distinctio eaque unde recusandae dolorum delectus cupiditate hic doloribus ipsa, provident qui. Impedit doloribus animi odio cupiditate, molestiae, praesentium dicta, corrupti minus numquam enim laborum amet?
                Nemo laboriosam quas hic quos consequatur illo ad neque blanditiis, debitis soluta, quam suscipit ratione esse id, sequi maxime ex temporibus eius minima at. Laborum fugiat corrupti voluptatem officiis perspiciatis!</span>


                <h2>Requerimientos</h2>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, perferendis! Aliquid dolorum aut, repellat omnis tempore praesentium sit earum excepturi adipisci inventore a quibusdam dolorem. Est hic consequatur id sapiente.
                Eius quidem suscipit modi veritatis aperiam? Quas, iure! Quae, facere! Tempora hic facere magnam commodi voluptatum neque architecto possimus, quos repellat aut aliquid obcaecati nostrum omnis facilis explicabo voluptatibus nemo!
                Dolorem modi odit nobis quis? Doloribus culpa assumenda repellat at omnis ullam, reprehenderit eligendi deleniti, repudiandae fugit vitae. Nisi fugiat non, aut excepturi numquam placeat aspernatur quaerat sequi! Exercitationem, adipisci.
                Accusamus, sint. Repudiandae, vero placeat? Assumenda sunt labore in recusandae fuga, doloremque quaerat officia non reiciendis eius id corrupti repudiandae? Illum consequatur officiis placeat odit perspiciatis quisquam voluptatibus debitis eum.</span>

                <ul>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                </ul>

                <h2>Solucion</h2>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, perferendis! Aliquid dolorum aut, repellat omnis tempore praesentium sit earum excepturi adipisci inventore a quibusdam dolorem. Est hic consequatur id sapiente.
                Eius quidem suscipit modi veritatis aperiam? Quas, iure! Quae, facere! Tempora hic facere magnam commodi voluptatum neque architecto possimus, quos repellat aut aliquid obcaecati nostrum omnis facilis explicabo voluptatibus nemo!
                Dolorem modi odit nobis quis? Doloribus culpa assumenda repellat at omnis ullam, reprehenderit eligendi deleniti, repudiandae fugit vitae. Nisi fugiat non, aut excepturi numquam placeat aspernatur quaerat sequi! Exercitationem, adipisci.
                Accusamus, sint. Repudiandae, vero placeat? Assumenda sunt labore in recusandae fuga, doloremque quaerat officia non reiciendis eius id corrupti repudiandae? Illum consequatur officiis placeat odit perspiciatis quisquam voluptatibus debitis eum.</span>
            </div>

        </section>

    @endif
</div>
