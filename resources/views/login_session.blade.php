<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">



      <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>

      <form class="mt-6" action="login_session" method="POST">
        @csrf
        <div>
          <label class="block text-gray-700">Email Address</label>
          <input type="email" name="email" id="" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
        </div>

        <div class="mt-4">
          <label class="block text-gray-700">Password</label>
          <input type="password" name="password" id="" placeholder="Enter Password"  class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
        </div>

        <div class="text-right mt-2">
          <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
        </div>

        <button type="submit" class="w-full block bg-purple-600 hover:bg-pink-600 shadow-lg focus:bg-indigo-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">Log In</button>
      </form>