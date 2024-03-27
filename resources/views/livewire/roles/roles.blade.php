<div>
    @if($isClosedEditor)

        <div class="pb-4">
            <button wire:click='createRole()' class="btn h-10 w-60 bg-green-400 text-white hover:bg-green-300">Добавить роль</button>
        </div>

        <div>
            <div class="grid grid-cols-6 mt-1 mb-1 rounded h-10 bg-slate-500"> 
                <p class="col-span-2 text-white flex flex-col justify-center items-center border-r-2">Id</p>
                <p class="col-span-2 text-white flex flex-col justify-center items-center border-r-2">Роль</p>
                <p class="col-span-2 text-white flex flex-col justify-center items-center">Действия</p>
            </div>

            @foreach($roles as $role)
                <div class="grid grid-cols-6 mt-1 mb-1 bg-slate-100 rounded h-10"> 
                    <div class="col-span-2 flex flex-col justify-center items-center border-r-2">
                        <p>{{$role->id}}</p>
                    </div>
                    <div class="col-span-2 flex flex-col justify-center items-center border-r-2">
                        <p>{{$role->name}}</p>
                    </div>
                    <div class="col-span-2 flex flex-col justify-center items-center">
                        <button wire:click="editRole({{$role->id}})" class="btn h-10 bg-yellow-500 text-white hover:bg-yellow-400">Редактирование</button>
                    </div>
                </div>
            @endforeach
         </div>
    @endif

    <livewire:roles.roles-editor>

</div>