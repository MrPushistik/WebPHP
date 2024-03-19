<div>
    @foreach($buildings as $building)
        <div class="grid grid-cols-9"> 
            <div>
                {{$building->id}}
            </div>
            <div>
                {{$building->address}}
            </div>
            <div>
                {{$building->size}}
            </div>
            <div>
                {{$building->type}}
            </div>
            <div>
                {{$building->power}}
            </div>
            <div>
                {{$building->status}}
            </div>
            <div class="col-span-3 grid grid-cols-3">
                <button wire:click="viewBuilding({{$building->id}})" class="btn mx-1 bg-green-400 text-white hover:bg-green-300">Просмотр</button>
                <button class="btn mx-1 bg-yellow-400 text-white hover:bg-yellow-300">Изменение</button>
                <button class="btn mx-1 bg-red-400 text-white hover:bg-red-300">Удаление</button>
            </div>
        </div>
    @endforeach
     <livewire:buildings.building-view>
</div>
