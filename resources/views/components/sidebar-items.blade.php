{{-- Menu Items --}}
@php
 $menuItems = [
        [
            "name" => "Dashboard",
            'path' => 'dashboard',
            'icon_class' => 'fa-regular fa-house',
        ], 
        [
            "name" => "Transactions",
            'path' => 'transactions',
            'icon_class' => 'fa-regular fa-money-from-bracket',
        ], 
    ];
@endphp
{{-- Menu Items End --}}
<div class="flex flex-col">
    <div class="w-full flex text-white text-lg justify-center my-8">
        <a href="/" class="w-40"><img src="img/logo.png" alt="logo" class=""></a>
    </div>
    <div class="flex flex-col gap-2">
        @foreach($menuItems as $item)
        <a href="/{{$item['path']}}" class="w-full text-white items-center flex gap-4 bg-gray-800 hover:bg-amber-600 rounded-lg px-5 py-2.5 smooth text-2xl">
            <i class="{{ $item['icon_class'] }}"></i>
            <span class="text-lg font-normal">{{ $item['name'] }}</span>
        </a>
        @endforeach
    </div>
</div>
<div class="text-center">
    <a href="JavaScript:Void(0);" @click="openModal" id="lgbtn"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    
    <script>
        $('#lgbtn').click( function() {
            $('#modal').removeClass('hidden');
            $('#modalbg').removeClass('hidden');
            $('#modalbg').addClass('flex');
        });
    </script>
</div>