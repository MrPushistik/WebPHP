<div>
        @if($tryEditOrCreate)

            <div class="grid grid-cols-6 gap-1">
                <p class='col-span-5 font-bold'>@if($id == null) Новое помещение @else Помещение # {{$id}} @endif</p>
                <button wire:click.prevent="closeEditor()" class="btn bg-red-400 text-white mb-5 hover:bg-red-300">Закрыть</button>
            </div>

            <form wire:submit.prevent="editOrCreate()" class="w-300">

                <div>
                    <div class="grid grid-cols-6 mb-1">
                        <label class="myLabel">Адрес</label>
                        <input class='col-span-5' type="text" placeholder="ул. Улица, д. 1" wire:model.live="form.address">
                    </div>
                    @error('form.address') <div class="text-end text-red-600">{{$message}}</div> @enderror
                </div>

                <div class="grid">
                    <div class="grid grid-cols-6 mb-1">
                        <label class="myLabel">Площадь помещения</label>
                        <input class='col-span-5' type="text" min="1" placeholder="24" wire:model.live="form.size">
                    </div>
                    @error('form.size') <div class="text-end text-red-600">{{$message}}</div> @enderror
                </div>

                <div class="grid grid-cols-6 mb-1">
                    <label class="myLabel">Тип помещения</label>
                    <select class='col-span-5' wire:model="form.type">
                        <option value="Торговое помещение">Торговое помещение</option>
                        <option value="Склад">Склад</option>
                    </select>
                </div>

                <div class="grid grid-cols-6 mb-1">
                    <label class="myLabel">Тип отопления</label>
                    <select class='col-span-5' wire:model="form.heat">
                        <option value="Центральное отопление">Центральное отопление</option>
                        <option value="Котельная">Котельная</option>
                    </select>
                </div>

                <div class="grid">
                    <div class="grid grid-cols-6 mb-1">
                        <label class="myLabel">Цена аренды в месяц</label>
                        <input class='col-span-5' type="text" min="1" placeholder="7000" wire:model.live="form.price">
                    </div>
                    @error('form.price') <div class="text-end text-red-600">{{$message}}</div> @enderror
                </div>

                <div class="grid">
                    <div class="grid grid-cols-6 mb-1">
                        <label class="myLabel">Описание</label>
                        <input class='col-span-5' type="text" min="1" placeholder="7000" wire:model.live="form.desc">
                    </div>
                     @error('form.desc') <div class="text-end text-red-600">{{$message}}</div> @enderror
                </div>

                <div class="grid grid-cols-6">
                    <label class="myLabel">Статус</label>
                    <select class='col-span-5' wire:model="form.status">
                        <option value="Свободно">Свободно</option>
                        <option value="Занято">Занято</option>
                    </select>
                </div>

                <div class="mt-5 grid grid-cols-6 gap-1">
                    @if ($id == null)
                        <button type="submit" class="btn col-start-6 bg-green-400 text-white hover:bg-green-300">Создать</button>
                    @else
                        @can('delete buildings')
                            <button wire:click.prevent='try2Delete()' class="btn col-end-6 col-span-1 bg-red-400 text-white hover:bg-red-300">Удалить</button>
                        @endcan
                        @can('edit buildings')
                            <button type="submit" class="btn bg-yellow-400 text-white hover:bg-yellow-300">Изменить</button>
                        @endcan
                    @endif
                </div>
            </form>
        @endif

        @if($tryDelete)
        <div class="fixed flex justify-center items-center top-0 left-0 insert-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
            <div class="relative m-4 w-2/5 min-w-[40%] max-w-[40%] rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl">
                <div class="flex items-center p-4 font-sans text-2xl antialiased font-semibold leading-snug shrink-0 text-blue-gray-900">
                Удаление помещения
                </div>
                <div class="relative p-4 font-sans text-base antialiased font-light leading-relaxed border-t border-b border-t-blue-gray-100 border-b-blue-gray-100 text-blue-gray-500">
                Вы точно хотите удалить помещение? Это действие нельзя будет отменить!
                </div>
                <div class="flex flex-wrap items-center justify-end p-4 shrink-0 text-blue-gray-500">
                <button wire:click.prevent='discardDelete()' class="px-6 py-3 mr-1 font-sans text-xs font-bold text-red-500 uppercase transition-all rounded-lg middle none center hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    Нет
                </button>
                <button wire:click='acceptDelete()' class="px-6 py-3 mr-1 font-sans text-xs font-bold text-green-500 uppercase transition-all rounded-lg middle none center hover:bg-green-500/10 active:bg-green-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    Да
                </button>
                </div>
            </div>
        </div>
        @endif
</div>

