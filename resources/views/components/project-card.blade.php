{{-- <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
    <div class="flex-shrink-0">
        <img class="h-12 w-12" src="{{ $project->image }}" alt="{{ $project->name }}">
    </div>
    <div>
        <div class="text-xl font-medium text-black">{{ $project->name }}</div>
        <p class="text-gray-500">{{ $project->description }}</p>
    </div>
</div> --}}

<?php
$project_cards = array('
    <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-1 hover:scale-110 transition-transform duration-200">
        <div class="p-6 max-w-sm mx-auto bg-gray-100 dark:bg-slate-900 rounded-xl shadow-md flex items-center space-x-4">
            <div class="flex-shrink-0">
                <img class="hover:scale-110 transition-transform duration-200" src="https://via.placeholder.com/150" alt="">
            </div>
            <div>
                <div class="text-xl font-medium text-black dark:text-slate-300">Some title</div>
                <p class="text-gray-500 dark:text-slate-400">Some paragraph text</p>
            </div>
        </div>
    </div>
');
?>

<div class="flex flex-wrap -mx-4 ">
    <?php foreach ($project_cards as $card): ?>
        <?php echo $card; ?>
    <?php endforeach; ?>
</div>

