<?php

$team_cards = [
    '
    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
        <div class="bg-gray-50 p-8 rounded-lg shadow-md dark:bg-slate-800 dark:text-slate-300 mt-5">
            <div class="flex justify-center items-center">
                <img class="rounded-full hover:scale-110 transition-transform duration-200" src="https://via.placeholder.com/100" alt="">
            </div>
            <small>Member</small>
            <p class="text-gray-700 leading-relaxed dark:text-slate-300">
                Full stack developer
            </p>
        </div>
    </div>
',
];
?>
@vite(['resources/js/lang.js'])
<div class="bg-gray-100 p-8 rounded-lg shadow-md dark:bg-slate-900 dark:text-slate-300">
    <h2 class="aboutCompany text-2xl font-bold mb-4">About Our Company</h2>
    <p class="text-gray-700 leading-relaxed dark:text-slate-300">
        We are a software development company dedicated to crafting high-quality solutions for our clients. With a team
        of experienced developers and designers, we strive to deliver innovative and tailored software products that
        meet the unique needs of each project.
    </p>
</div>

<div class="bg-gray-100 p-8 rounded-lg shadow-md dark:bg-slate-900 dark:text-slate-300 mt-5">
    <h2 class="text-2xl font-bold mb-4">The Team</h2>
    <div class="flex flex-wrap -mx-4 ">
        <?php foreach ($team_cards as $card): ?>
        <?php echo $card; ?>
        <?php endforeach; ?>
    </div>
</div>

<!-- Testimonials -->
<div class="bg-gray-100 p-8 rounded-lg shadow-md dark:bg-slate-900 dark:text-slate-300 mt-5">
    <h2 class="text-2xl font-bold mb-4">Testimonials</h2>
    <p class="text-gray-700 leading-relaxed dark:text-slate-300">
        We are proud to have worked with some of the most talented and accomplished developers in the industry. Our team
        of experts is dedicated to delivering high-quality solutions that exceed our clients' expectations. We are
        committed to delivering exceptional results and ensuring that our clients receive the best possible service.
    </p>
</div>
