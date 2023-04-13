<div class="h-screen flex justify-center items-center flex-col gap-8">
    <h1 class="text-6xl font-bold text-cyan-600">SQLibrary</h1>
    <p class="text-2xl">¡Bienvenido!</p>
    <form class="w-full px-20 py-10 flex justify-center items-end gap-4" action="?controller=Library&action=search" method="post"> 
        <div class="flex flex-col gap-2">
            <label for="title" class="">Busca por título</label>
            <input type="text" class="w-80 p-1 outline outline-1 outline-teal-500" id="title" name="title" placeholder="Introduce el título del libro...">
        </div>
        <div class="flex justify-center items-end">
            <button type="submit" class="bg-cyan-600 hover:bg-teal-500 text-white p-4 h-8 w-8 rounded-full flex justify-center items-center"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
	</form>
</div>