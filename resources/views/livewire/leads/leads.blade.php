<div>
    @if($isClosedEditor)

        @can('create buildings')
            <div class="pb-4">
                <button wire:click='createLead()' class="btn h-10 w-60 bg-green-400 text-white hover:bg-green-300">Добавить лид</button>
            </div>
        @endcan

        @can('read buildings')
            <div>
                <div class="grid grid-cols-9 mt-1 mb-1 rounded h-10 bg-slate-500">
                    <p class="col-span-1 text-white flex flex-col justify-center items-center border-r-2">Id</p>
                    <p class="col-span-1 text-white flex flex-col justify-center items-center border-r-2">Имя</p>
                    <p class="col-span-1 text-white flex flex-col justify-center items-center border-r-2"> Фамилия</p>
                    <p class="col-span-2 text-white flex flex-col justify-center items-center border-r-2">Отчество</p>
                    <p class="col-span-2 text-white flex flex-col justify-center items-center border-r-2">Email</p>
                    <p class="col-span-1 text-white flex flex-col justify-center items-center border-r-2">Телефон</p>
                    <p class="col-span-1 text-white flex flex-col justify-center items-center">Действия</p>
                </div>

                @foreach($leads as $lead)
                    <div class="grid grid-cols-9 mt-1 mb-1 bg-slate-100 rounded h-10">
                        <div class="col-span-1 flex flex-col justify-center items-center border-r-2">
                            <p>{{$lead->id}}</p>
                            {{-- @foreach ($building->rents as $rent)
                                <p>{{$rent->lead->name}}</p>
                            @endforeach --}}
                        </div>
                        <div class="col-span-1 flex flex-col justify-center items-center border-r-2">
                            <p>{{$lead->name}}</p>
                        </div>
                        <div class="col-span-1 flex flex-col justify-center items-center border-r-2">
                            <p>{{$lead->surname}}</p>
                        </div>
                        <div class="col-span-2 flex flex-col justify-center items-center border-r-2">
                            <p>{{$lead->patronymic}}</p>
                        </div>
                        <div class="col-span-2 flex flex-col justify-center items-center border-r-2">
                            <p>{{$lead->email}}</p>
                        </div>
                        <div class="col-span-1 flex flex-col justify-center items-center border-r-2">
                            <p>{{$lead->phone}} </p>
                        </div>
                        <div class="col-span-1 flex flex-col justify-center items-center">
                            <button wire:click="editLead({{$lead->id}})" class="btn h-10 bg-yellow-500 text-white hover:bg-yellow-400">Редактирование</button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endcan
    @endif

    <livewire:leads.lead-editor>
</div>
