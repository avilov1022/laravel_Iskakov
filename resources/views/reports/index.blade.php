<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Заявка на участие') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('login') }}" class="border p-2">Посмотреть задание</a>
                    <form class="mt-4 flex flex-col gap-4" method="POST" action="{{ route('register') }}"> <!-- CHANGE ROUTE -->
                        @csrf
                
                        <!-- Category -->
                        <div>
                            <x-input-label for="category" :value="__('Категория')" />
                            <select name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                    <option id="{{ $category->id }}" value="{{ $category->id }}"> 
                                        {{ $category->title }} 
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category')" class="mt-2" />
                        </div>
                        
                        <!-- Postcard -->
                        <div>
                            <x-input-label for="postcard" :value="__('Название открытки')" />
                            <x-text-input id="postcard" class="block mt-1 w-full" type="text" name="postcard" :value="old('postcard')" required autofocus />
                            <x-input-error :messages="$errors->get('postcard')" class="mt-2" />
                        </div>

                        <!-- Загрузить открытку -->
                        <div>
                            <x-input-label for="postcardFile" :value="__('Название открытки')" />
                            <x-text-input id="postcardFile" class="block mt-1 w-full" type="file" name="postcard" :value="old('postcard')" required autofocus />
                            <x-input-error :messages="$errors->get('postcardFile')" class="mt-2" />
                        </div>
                
                        <button class="border mt-4 p-4">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
