<div class="py-20 flex justify-center items-center flex-col gap-8">
    <h1 class="text-3xl font-bold text-cyan-600">Añade un libro</h1>
    <form action="?controller=Library&&action=save" method="POST" validate="validate" class="w-80"> 
        <div class="w-full flex justify-center flex-col gap-8">

            <div class="w-full flex flex-col gap-2">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="w-full p-1 outline outline-offset-2 outline-1 outline-teal-500">
            </div>

            <div class="w-full flex flex-col gap-2">
                <label for="name">Autor</label>
                <div class="w-full flex gap-4">
                    <input type="text" id="name" name="name" placeholder="Nombre" class="w-full p-1 outline outline-offset-2 outline-1 outline-teal-500">
                    <input type="text" id="surname" name="surname" placeholder="Apellido/s" class="w-full p-1 outline outline-offset-2 outline-1 outline-teal-500">
                </div>
            </div>

            <div class="w-full flex flex-col gap-2">
                <label name="category" class="">Categoría</label>
                <select id="category" name="category" class="w-full p-1 outline outline-offset-2 outline-1 outline-teal-500" required>
                    <option value="">Seleccione</option> 
                    <option value="Acción">Acción</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Ciencia ficción">Ciencia ficción</option>
                    <option value="Contemporánea">Contemporánea</option>
                    <option value="Fantasía">Fantasía</option>
                    <option value="Misterio">Misterio</option>
                    <option value="Novela negra">Novela negra</option>
                    <option value="Terror">Terror</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <div class="w-full flex flex-col gap-2">
                <label for="publish_date">Fecha de publicación</label>
                <input type="date" name="publish_date" id="publish_date" class="w-full p-1 outline outline-offset-2 outline-1 outline-teal-500">
            </div>

            <div class="w-full flex flex-col gap-2">
                <label for="rate">Valoración</label>
                <input type="range" name="rate" id="rate" min="0" max="5" class="w-full p-1">
                <div class="w-full text-cyan-600 flex justify-between gap-8">
                    <?php
                        for ($i=0; $i<=5; $i++) {
                            echo '<span style="flex-basis: 16.6%" class="text-center">' . $i . '</span>';
                        }
                    ?>
                </div>
            </div>

            <div class="w-full flex justify-center gap-4">
                <button type="submit" class="bg-cyan-600 hover:bg-teal-500 text-white px-2.5 py-1.5 w-20 text-center">Guardar</button>
                <a href="?controller=Library&&action=showBooks" class="bg-cyan-600 hover:bg-teal-500 text-white px-2.5 py-1.5 w-20 text-center">Volver</a>
            </div>

        </div>
    </form>
</div>