<div>
   <h1 class="text-secondary">Your license is currently for <strong>{{$teamSize}}{{$teamSize > 1 ? 'people' : 'person'}} </strong> </h1>
   <input type="range" wire:model="teamSize" min="1" max="10" value="2"class="form-range">
   <h2 class="mt-5">Amount:${{$amount}}</h2>
</div>


<!--le model va associé la valeur de notre variable teamsize de notre composant calcul.php
-->
