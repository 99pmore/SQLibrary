<div class="py-20 flex justify-center items-center flex-col gap-8">
    <h1 class="text-3xl font-bold text-cyan-600">Libros</h1>

    <form class="w-full px-20 py-10 flex justify-center items-end gap-4" action="?controller=Library&action=search" method="post"> 
        <div class="flex flex-col gap-2">
            <label for="title" class="">Busca por título</label>
            <input type="text" class="w-80 p-1 outline outline-1 outline-teal-500" id="title" name="title" placeholder="Introduce el título del libro...">
        </div>
        <div class="flex justify-center items-end">
            <button type="submit" class="bg-cyan-600 hover:bg-teal-500 text-white p-4 h-8 w-8 rounded-full flex justify-center items-center"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
	</form>

    <div class="w-full p-20 flex justify-center flex-wrap gap-12">
        <?php foreach ($books as $book) { ?>
            <div class="bg-cyan-600 text-white text-center p-6 w-56 h-96 flex justify-between items-center flex-col gap-4 outline outline-offset-2 outline-2 outline-teal-500">
                <h2 class="text-2xl font-bold"><?= $book['title']; ?></h2>
                <h3 class="text-lg font-bold"><?= $book['name']; ?> <?= $book['surname']; ?></h3>
                <hr class="w-full divide-white">
                <h4 class="text-base">Categoría: <?= $book['category']; ?></h4>
                <h4 class="text-base">Publicación: <?= $book['publish_date']; ?></h4>
                <h4 class="text-base">
                    <?php
                        $empty_star = 5 - $book['rate'];

                        for ($i = 1; $i <= 5; $i++) {

                            if ($i <= $book['rate']) {
                                echo ' <i class="fa-solid fa-star"></i>';

                            } else {
                                echo ' <i class="fa-regular fa-star"></i>';
                            }
                        }

                    ?>
                </h4>
                <div class="w-full flex justify-end items-center gap-4 text-sm">
                    <button onclick="window.location.href='?controller=Library&&action=updateBook&&id_book=<?= $book['id_book']?> '" title="Editar" class="hover:text-teal-400"><i class="fa-regular fa-pen-to-square"></i></button>
                    <button onclick="window.location.href='?controller=Library&&action=delete&&id_book=<?= $book['id_book'] ?>'" title="Eliminar" class="hover:text-red-300"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>
        <?php } ?>
    </div>
</div>