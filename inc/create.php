<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="input.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
  <h1>Create User</h1>
  <form>
    <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Name</label>
      <input type="text" class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name"
        placeholder="Name">
    </div>
    <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Lastname</label>
      <input type="text" class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1"
         placeholder="Lastname">
    </div>
    <div class="form-group mb-6">
      <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected>Choose a country</option>
          <option value="US">United States</option>
          <option value="SP">Spain</option>
          <option value="FR">France</option>
          <option value="DE">Germany</option>
          <option value="IT">Italy</option>
        </select>
    </div>
    <div class="form-group mb-6">
      <label for="inputEmail" class="form-label inline-block mb-2 text-gray-700">Email address</label>
      <input type="email" class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="inputEmail"
         placeholder="Enter email">
    </div>
    
    <div class="form-group mb-6">
      <label for="InputPassword1" class="form-label inline-block mb-2 text-gray-700">Password</label>
      <input type="password" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="InputPassword1"
        placeholder="Password">
    </div>
    <div class= "flex justify-between">
      <button type="submit" class="
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Submit
      </button>
      <button type="button" class="inline-block 
      px-6 
      py-2.5
      bg-red-600
       text-white 
       font-medium
       text-xs 
       leading-tight 
       uppercase 
       rounded 
       shadow-md
       hover:bg-red-700 hover:shadow-lg
       focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0
       active:bg-red-800 active:shadow-lg 
       transition duration-150 ease-in-out">Cancel</button>
    </div>
    
  </form>
</div>

</body>
</html>