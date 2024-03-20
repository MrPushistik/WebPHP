<div>
    @if($isClosedEditor)
        <div class="grid">
        @foreach($buildings as $building)
            <div class="grid grid-cols-7"> 
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
                <div >
                    {{$building->status}}
                </div>
                <div>
                    <button wire:click="viewBuilding({{$building->id}})" class="btn mx-1 bg-green-400 text-white hover:bg-green-300">Редактирование</button>
                </div>
            </div>
        @endforeach
         </div>
    @endif

    <livewire:buildings.building-editor>
</div>
