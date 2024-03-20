<div>
        @isset($id)
            <div>Здание #{{$id}}</div>
        
            <form>
                <div>
                    <button type="submit" class="btn mx-1 bg-yellow-400 text-white hover:bg-yellow-300">Изменить</button>
                    <button type="reset" class="btn mx-1 bg-red-400 text-white hover:bg-red-300">Удалить</button>
                    <button wire:click.prevent='closeEditor()' class="btn mx-1 bg-red-400 text-white hover:bg-red-300">Закрыть</button>
                </div>
                <div>
                    <label>Адрес</label>
                    <input type="text" placeholder="ул. Улица, д. 1" wire:model="form.address">
                </div>
                <div>
                    <label>Площадь помещения</label>
                    <input type="number" min="1" placeholder="24" wire:model="form.size">
                </div>
                {{-- <div>
                    {{$building->type}}
                </div> --}}
                {{-- <div>
                    {{$building->heat}}
                </div> --}}
                <div>
                    <label>Цена 1кВт*ч электроэнергии</label>
                    <input type="number" min="1" placeholder="3" wire:model="form.power">
                </div>
                <div>
                    <label>Цена аренды в месяц</label>
                    <input type="number" min="1" placeholder="7000" wire:model="form.price">
                </div>
                <div>
                    <label>Описание</label>
                    <input type="text" min="1" placeholder="7000" wire:model="form.desc">
                </div>
                {{-- <div>
                    {{$building->status}}
                </div> --}}
            </form>
        @endisset
</div>

