<div>
    @if($isClosedEditor)
        <div class="pb-4">
            <button wire:click='createBuilding()' class="btn h-10 w-60 bg-green-400 text-white hover:bg-green-300">Добавить помещение</button>
        </div>

        <div>
            <div class="grid grid-cols-9 mt-1 mb-1 rounded h-10 bg-slate-500"> 
                <p class="col-span-1 text-white flex flex-col justify-center items-center border-r-2">Id</p>
                <p class="col-span-2 text-white flex flex-col justify-center items-center border-r-2">Адрес</p>
                <p class="col-span-1 text-white flex flex-col justify-center items-center border-r-2"> Площадь</p>
                <p class="col-span-2 text-white flex flex-col justify-center items-center border-r-2">Тип</p>
                <p class="col-span-1 text-white flex flex-col justify-center items-center border-r-2"> Цена</p>
                <p class="col-span-1 text-white flex flex-col justify-center items-center border-r-2">Статус</p>
                <p class="col-span-1 text-white flex flex-col justify-center items-center">Действия</p>
            </div>

            @foreach($buildings as $building)
                <div class="grid grid-cols-9 mt-1 mb-1 bg-slate-100 rounded h-10"> 
                    <div class="col-span-1 flex flex-col justify-center items-center border-r-2">
                        <p>{{$building->id}}</p>
                    </div>
                    <div class="col-span-2 flex flex-col justify-center items-center border-r-2">
                        <p>{{$building->address}}</p>
                    </div>
                    <div class="col-span-1 flex flex-col justify-center items-center border-r-2">
                        <p>{{$building->size}}</p>
                    </div>
                    <div class="col-span-2 flex flex-col justify-center items-center border-r-2">
                        <p>{{$building->type}}</p>
                    </div>
                    <div class="col-span-1 flex flex-col justify-center items-center border-r-2">
                        <p>{{$building->price}}</p>
                    </div>
                    <div class="col-span-1 flex flex-col justify-center items-center border-r-2">
                        <p>{{$building->status}} </p>
                    </div>
                    <div class="col-span-1 flex flex-col justify-center items-center">
                        <button wire:click="editBuilding({{$building->id}})" class="btn h-10 bg-yellow-500 text-white hover:bg-yellow-400">Редактирование</button>
                    </div>
                </div>
            @endforeach
         </div>
    @endif

    <livewire:buildings.building-editor>
</div>
