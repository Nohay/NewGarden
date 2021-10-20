<?php $__env->startSection('content'); ?>
<?php
// var_dump(session('sector_activities'));
// var_dump(session('nb_machine'));
// var_dump(session('card_number'));
// var_dump(session('date_expiration'));
// var_dump(session('cvv'));
// var_dump(session('user_precommande'));
?>
<section id="section1" class="h-screen">
    <div class="grid grid-cols-2 place-items-center h-full pb-20">
        <div>
            <img class="ml-40 object-cover h-60" src="<?php echo e(URL::asset('images/plante.png')); ?>" alt="Nothing">
        </div>
        <div class="w-6/12">
            <h1 class="text-xl font-bold">Le Lorem IP</h1>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, voluptate veniam! Pariatur aut, impedit, ea incidunt
                atque voluptas quam perferendis culpa laborum alias quae itaque blanditiis libero harum unde est.</p>
            <br>
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-20 rounded-xl">Précommander</button>
        </div>
    </div>
</section>
<section id="section2" class="h-screen">
    <div class="grid grid-cols-3 place-items-center h-full">
        <div class="grid place-items-center w-3/4 h-3/4  bg-gray-200 hover:bg-white rounded-lg shadow-2xl">
            <div>
                <img class="h-40 mb-20" src="<?php echo e(URL::asset('images/microchipv2.png')); ?>" alt="Nothing">
                <p class="text-center text-xl font-bold">COMPOSANTS</p>
            </div>
        </div>
        <div class="grid place-items-center w-3/4 h-3/4 bg-gray-200 hover:bg-white rounded-lg shadow-2xl">
            <div>
                <img class="h-40 mb-20" src="<?php echo e(URL::asset('images/temperature-sensorv2.png')); ?>" alt="Nothing">
                <p class="text-center text-xl font-bold">CAPTEURS</p>
            </div>
        </div>
        <div class="grid place-items-center w-3/4 h-3/4 bg-gray-200 hover:bg-white rounded-lg shadow-2xl">
            <div>
                <img class="h-40 mb-20" src="<?php echo e(URL::asset('images/analyticsv2.png')); ?>" alt="Nothing">
                <p class="text-center text-xl font-bold">GRAPHIQUES</p>
            </div>
        </div>
    </div>
</section>
<section id="section3" class="h-screen">
    <div class="grid grid-cols-3 place-items-center h-full">
        <div>
            <img class="h-40" src="<?php echo e(URL::asset('images/giftbox.png')); ?>" alt="Nothing">
        </div>
        <div class="col-span-2 grid place-items-center w-10/12 h-2/3 rounded-lg shadow-2xl">
            <form-precommande 
                fill-input-card="<?php echo e(session('card_number')); ?>"
                fill-input-sector="<?php echo e(session('sector_activities')); ?>"
                fill-input-machine="<?php echo e(session('nb_machine')); ?>"
                fill-input-date="<?php echo e(session('date_expiration')); ?>"
                fill-input-cvv="<?php echo e(session('cvv')); ?>"
            >
            </form-precommande>
        </div>
    </div>
</section>
<section id="section4" class="h-screen x-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="grid grid-cols-1 place-items-center h-full sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-20">
        <div class="w-3/4 h-3/5 shadow-2xl rounded-lg p-12 flex flex-col justify-center items-center">
            <div class="mb-10">
                <img class="object-center object-cover rounded-full h-36 w-36" src="<?php echo e(URL::asset('images/nico.jpg')); ?>" alt="photo">
            </div>
            <div class="text-center mb-10">
                <p class="text-xl text-gray-700 font-bold mb-2">Nicolas Latchimy</p>
                <p class="text-base text-gray-400 font-normal">Technicien Développeur</p>
            </div>
        </div>
        <div class="w-3/4 h-3/5 shadow-2xl rounded-lg p-12 flex flex-col justify-center items-center">
            <div class="mb-10">
                <img class="object-center object-cover rounded-full h-36 w-36" src="<?php echo e(URL::asset('images/ben2.png')); ?>" alt="photo">
            </div>
            <div class="text-center mb-10">
                <p class="text-xl text-gray-700 font-bold mb-2">Benjamin Hoarau</p>
                <p class="text-base text-gray-400 font-normal">Technicien Développeur</p>
            </div>
        </div>
        <div class="w-3/4 h-3/5 shadow-2xl rounded-lg p-12 flex flex-col justify-center items-center">
            <div class="mb-10">
                <img class="object-center object-cover rounded-full h-36 w-36" src="<?php echo e(URL::asset('images/jo.png')); ?>" alt="photo">
            </div>
            <div class="text-center mb-10">
                <p class="text-xl text-gray-700 font-bold mb-2">Jonathan Riviere</p>
                <p class="text-base text-gray-400 font-normal">Technicien Développeur</p>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\VUEDEMERDE\resources\views/welcome.blade.php ENDPATH**/ ?>