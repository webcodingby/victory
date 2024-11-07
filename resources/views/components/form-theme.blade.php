 <form class="form form__<?=session('theme', 'classic')?>" action="{{ route('set.theme') }}" method="POST">
     @csrf
     <div class="form__wrap">
         <label for="theme">Выберите тему:</label>
         <select name="theme" id="theme">
             <option value="classic">Classic</option>
             <option value="cuba">Cuba</option>
         </select>
     </div>
     <x-theme-button type="submit" :theme="session('theme', 'classic')">Сохранить</x-theme-button>
 </form>

