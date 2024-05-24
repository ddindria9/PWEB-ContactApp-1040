<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="output.css">
    <title>Contact Manager</title>
</head>
<body>
  <div class="flex flex-row">
    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 h-[calc(100vh-2rem)] w-full max-w-[20rem] p-4 shadow-xl shadow-grey-gray-900/5">
      <div class="mb-2 p-4 flex">
        <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-gray-900">Contact Manager</h5>
      </div>
      <nav class="flex flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal text-gray-700">
        <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-grey-50 hover:bg-opacity-80 focus:bg-grey-50 focus:bg-opacity-80 active:bg-grey-50 active:bg-opacity-80 hover:text-grey-900 focus:text-grey-900 active:text-grey-900 outline-none">
          <div class="grid place-items-center mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
              <path fill-rule="evenodd" d="M6.912 3a3 3 0 00-2.868 2.118l-2.411 7.838a3 3 0 00-.133.882V18a3 3 0 003 3h15a3 3 0 003-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0017.088 3H6.912zm13.823 9.75l-2.213-7.191A1.5 1.5 0 0017.088 4.5H6.912a1.5 1.5 0 00-1.434 1.059L3.265 12.75H6.11a3 3 0 012.684 1.658l.256.513a1.5 1.5 0 001.342.829h3.218a1.5 1.5 0 001.342-.83l.256-.512a3 3 0 012.684-1.658h2.844z" clip-rule="evenodd"></path>
            </svg>
          </div>List Kontak <div class="grid place-items-center ml-auto justify-self-end">
            <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-grey-500/20 text-grey-900 py-1 px-2 text-xs rounded-full" style="opacity: 1;">
              <span class="">3</span>
            </div>
          </div>
        </div>
        <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-grey-50 hover:bg-opacity-80 focus:bg-grey-50 focus:bg-opacity-80 active:bg-grey-50 active:bg-opacity-80 hover:text-grey-900 focus:text-grey-900 active:text-grey-900 outline-none">
          <div class="grid place-items-center mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
              <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
            </svg>
          </div>Profil
        </div>
        <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-grey-50 hover:bg-opacity-80 focus:bg-grey-50 focus:bg-opacity-80 active:bg-grey-50 active:bg-opacity-80 hover:text-grey-900 focus:text-grey-900 active:text-grey-900 outline-none">
          <div class="grid place-items-center mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
              <path fill-rule="evenodd" d="M11.078 2.005a2.18 2.18 0 00-1.953 0L2.219 5.423A1.25 1.25 0 001 6.654v9.692c0 .603.417 1.111 1 1.25l7.906 2.722c.07.024.143.035.213.035.133 0 .265-.042.38-.122.254-.155.43-.402.496-.68L12 14.197l.786 4.515c.066.278.242.525.496.68.116.08.247.122.38.122.07 0 .143-.011.213-.035l7.906-2.722c.583-.139 1-.647 1-1.25V6.654a1.25 1.25 0 00-.219-1.231l-7.906-3.418zM12 3.8l6.625 2.85L12 9.219l-6.625-2.57L12 3.8zm0 9.7l5.563 1.917-5.563 1.917-5.563-1.917L12 13.5z" clip-rule="evenodd"></path>
            </svg>
          </div>Logout
        </div>
      </nav>
    </div>
    <div class="flex-1 p-4">
      <h1 class="font-bold text-2xl mb-4">Daftar Kontak</h1>
      <button id="tambahKontakButton" class="bg-green-500 text-white font-bold py-2 px-4 rounded mb-4">Tambah Kontak</button>
      <table class="w-full table-auto">
        <thead>
          <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Nama Owner</th>
            <th class="py-3 px-6 text-left">Nomor Telepon</th>
            <th class="py-3 px-6 text-left">Alamat</th>
            <th class="py-3 px-6 text-left">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
          <!-- Dummy Data -->
          <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6 text-left whitespace-nowrap">1</td>
            <td class="py-3 px-6 text-left">Dini</td>
            <td class="py-3 px-6 text-left">087656789</td>
            <td class="py-3 px-6 text-left">D'kebonsari</td>
            <td class="py-3 px-6 text-left">
              <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
                Edit
              </button>
              <button class="bg-red-500 text-white font-bold py-2 px-4 rounded">
                Hapus
              </button>
            </td>
          </tr>
          <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6 text-left whitespace-nowrap">2</td>
            <td class="py-3 px-6 text-left">Joni versace</td>
            <td class="py-3 px-6 text-left">087653289</td>
            <td class="py-3 px-6 text-left">Jl. Sumatra</td>
            <td class="py-3 px-6 text-left">
              <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
                Edit
              </button>
              <button class="bg-red-500 text-white font-bold py-2 px-4 rounded">
                Hapus
              </button>
            </td>
          </tr>
          <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6 text-left whitespace-nowrap">3</td>
            <td class="py-3 px-6 text-left">Lala land</td>
            <td class="py-3 px-6 text-left">0854325789</td>
            <td class="py-3 px-6 text-left">Jl. Jawa</td>
            <td class="py-3 px-6 text-left">
              <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
                Edit
              </button>
              <button class="bg-red-500 text-white font-bold py-2 px-4 rounded">
                Hapus
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal -->
  <div id="modal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-8 rounded-md shadow-lg">
      <h2 class="text-2xl font-bold mb-4">Tambah Kontak</h2>
      <!-- Form tambah kontak -->
      <form>
        <div class="mb-4">
          <label for="namaOwner" class="block text-gray-700 text-sm font-bold mb-2">Nama Owner:</label>
          <input type="text" id="namaOwner" name="namaOwner" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
          <label for="nomorTelepon" class="block text-gray-700 text-sm font-bold mb-2">Nomor Telepon:</label>
          <input type="text" id="nomorTelepon" name="nomorTelepon" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-6">
          <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat:</label>
          <textarea id="alamat" name="alamat" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <div class="flex justify-end">
          <button id="tutupModal" type="button" class="bg-gray-400 text-white px-4 py-2 rounded-md mr-2">Tutup</button>
          <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
        </div>
      </form>
    </div>
  </div>
  <!-- End Modal -->

  <script>
    const tambahKontakButton = document.getElementById('tambahKontakButton');
    const modal = document.getElementById('modal');
    const tutupModal = document.getElementById('tutupModal');

    tambahKontakButton.addEventListener('click', () => {
      modal.classList.remove('hidden');
    });

    tutupModal.addEventListener('click', () => {
      modal.classList.add('hidden');
    });
  </script>
</body>
</html>
