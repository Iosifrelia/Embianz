<x-layout>

  <x-slot name="header">
    {{__('Test')}}
  </x-slot>

  <div>
    <x-splade-table :for="$categorys"></x-splade-table>
  </div>

</x-layout>