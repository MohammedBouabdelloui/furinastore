@extends('admin.layout.dash')

@section('content')

<body class="antialiased font-sans bg-gray-200">
  <div class="container mx-auto px-4 sm:px-8">
      <div class="py-8">
          <div>
              <h2 class="text-2xl font-semibold leading-tight">Users</h2>
          </div>

          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
              <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                  <table class="min-w-full leading-normal">
                      <thead>
                          <tr>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  User
                              </th>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Rol
                              </th>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Created at
                              </th>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Status
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full"
                                              src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                              alt="" />
                                      </div>
                                      <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                              Vera Carpenter
                                          </p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      Jan 21, 2020
                                  </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <span
                                      class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                      <span aria-hidden
                                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                      <span class="relative">Activo</span>
                                  </span>
                              </td>
                          </tr>
                          <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full"
                                              src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                              alt="" />
                                      </div>
                                      <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                              Blake Bowman
                                          </p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      Jan 01, 2020
                                  </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <span
                                      class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                      <span aria-hidden
                                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                      <span class="relative">Activo</span>
                                  </span>
                              </td>
                          </tr>
                          <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full"
                                              src="https://images.unsplash.com/photo-1540845511934-7721dd7adec3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                              alt="" />
                                      </div>
                                      <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                              Dana Moore
                                          </p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      Jan 10, 2020
                                  </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <span
                                      class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                      <span aria-hidden
                                          class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                      <span class="relative">Suspended</span>
                                  </span>
                              </td>
                          </tr>
                          <tr>
                              <td class="px-5 py-5 bg-white text-sm">
                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full"
                                              src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                              alt="" />
                                      </div>
                                      <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                              Alonzo Cox
                                          </p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-5 py-5 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                              </td>
                              <td class="px-5 py-5 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Jan 18, 2020</p>
                              </td>
                              <td class="px-5 py-5 bg-white text-sm">
                                  <span
                                      class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                      <span aria-hidden
                                          class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                      <span class="relative">Inactive</span>
                                  </span>
                              </td>
                          </tr>
                      </tbody>
                  </table>
                  <div
                      class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                      <span class="text-xs xs:text-sm text-gray-900">
                          Showing 1 to 4 of 50 Entries
                      </span>
                      <div class="inline-flex mt-2 xs:mt-0">
                          <button
                              class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                              Prev
                          </button>
                          <button
                              class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                              Next
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
  
@endsection