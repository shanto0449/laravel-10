<x-layout>
    <x-slot name="title">Login Page</x-slot>
    <x-slot name="main">
        <div>
            <h1 id="heading" class="heading">User Ligin</h1>
            <input type="text" name="email" placeholder="Enter Email">
            <br><br>
            <input type="text" name="password" placeholder="password">
            <br><br>
            <button onclick="changeColor()">Login</button>
        </div>
    </x-slot>
</x-layout>
