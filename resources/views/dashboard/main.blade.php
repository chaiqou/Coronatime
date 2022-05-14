<x-layout>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Log Out user</button>
    </form>

</x-layout>
