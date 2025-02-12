<header class="bg-white shadow-sm">
    <div class="h-16 flex items-center justify-between px-4">
        <button class="md:hidden text-gray-600" onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')">
            <i class="fas fa-bars text-xl"></i>
        </button>
        <div class="flex items-center space-x-4">

            <div class="flex items-center space-x-2">
                <img src="https://cdn.beta.qalampir.uz/uploads/XP/f_Xa8ipX1Xww5kCqzdTtObERwgoXdah0.jpg" alt="Profile" class="w-10 h-10 rounded-full">
                <span class="text-gray-700 font-medium">{{auth()->user()->name }}</span>
            </div>
        </div>
    </div>
</header>
