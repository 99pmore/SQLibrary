<div class="py-20 flex justify-center items-center flex-col gap-8">
    <h1 class="text-3xl font-bold text-cyan-600">Edita este libro</h1>
    <form action="?controller=Library&&action=edit" method="POST" validate="validate" class="w-80"> 
        <div class="w-full flex justify-center flex-col gap-8">

            <input type="hidden" name="id_book" id="id_book" value="<?= $book['id_book'] ?>">
            <input type="hidden" name="id_author" id="id_author" value="<?= $book['id_author'] ?>">

            <div class="w-full flex flex-col gap-2">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" value="<?= $book['title'] ?>" class="w-full p-1 outline outline-offset-2 outline-1 outline-teal-500">
            </div>

            <div class="w-full flex flex-col gap-2">
                <label for="name">Autor</label>
                <div class="w-full flex gap-4">
                    <input type="text" id="name" name="name" placeholder="Nombre" value="<?= $book['name'] ?>" class="w-full p-1 outline outline-offset-2 outline-1 outline-teal-500">
                    <input type="text" id="surname" name="surname" placeholder="Apellido/s" value="<?= $book['surname'] ?>" class="w-full p-1 outline outline-offset-2 outline-1 outline-teal-500">
                </div>
            </div>

            <div class="w-full flex flex-col gap-2">
                <label name="category" class="">Categoría</label>
                <select id="category" name="category" class="w-full p-1 outline outline-offset-2 outline-1 outline-teal-500" required>
                    <option value="">Seleccione</option>
                    <option value="Acción" <?php if ($book['category'] == 'Acción') echo 'selected' ?>>Acción</option>
                    <option value="Aventura" <?php if ($book['category'] == 'Aventura') echo 'selected' ?>>Aventura</option>
                    <option value="Ciencia ficción" <?php if ($book['category'] == 'Ciencia ficción') echo 'selected' ?>>Ciencia ficción</option>
                    <option value="Contemporánea" <?php if ($book['category'] == 'Contemporánea') echo 'selected' ?>>Contemporánea</option>
                    <option value="Fantasía" <?php if ($book['category'] == 'Fantasía') echo 'selected' ?>>Fantasía</option>
                    <option value="Misterio" <?php if ($book['category'] == 'Misterio') echo 'selected' ?>>Misterio</option>
                    <option value="Novela negra" <?php if ($book['category'] == 'Novela negra') echo 'selected' ?>>Novela negra</option>
                    <option value="Terror" <?php if ($book['category'] == 'Terror') echo 'selected' ?>>Terror</option>
                    <option value="Thriller" <?php if ($book['category'] == 'Thriller') echo 'selected' ?>>Thriller</option>
                    <option value="Otro" <?php if ($book['category'] == 'Otro') echo 'selected' ?>>Otro</option>
                </select>
            </div>

            <div class="w-full flex flex-col gap-2">
                <label for="publish_date">Fecha de publicación</label>
                <input type="date" name="publish_date" id="publish_date" value="<?= $book['publish_date'] ?>" class="w-full p-1 outline outline-offset-2 outline-1 outline-teal-500">
            </div>

            <div class="w-full flex flex-col gap-2">
                <label for="rate">Valoración</label>
                <input type="range" name="rate" id="rate" min="0" max="5" value="<?= $book['rate'] ?>" class="w-full p-1">
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