<x-layout>
    <x-slot:title>
        SKosapp | Signup
        </x-slot>

        <div class="grid grid-cols-2 gap-4 items-center h-4/5">
            <div class="">
                <figure><img src="images/residential-kosapp.jpg" alt="residential-kosapp" /> </figure>
            </div>
            <div class="grid justify-items-center">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title font-bold py-5">Login Account</h2>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text">Username</span>
                            </div>
                            <div class="relative">
                                <input type="text" class="input input-sm input-bordered w-full max-w-xs" />
                            </div>
                            <div class="label">
                                <span class="label-text">Phone Number</span>
                            </div>
                            <div class="relative input-sm flex items-center gap-2 -mx-3">
                                <span class="label-text">+62</span>
                                <input type="text" class="input input-sm input-bordered w-full max-w-xs" />
                            </div>
                            <div class="label">
                                <span class="label-text">Password</span>
                            </div>
                            <div class="relative">
                                <input type="password" class="input input-sm input-bordered w-full max-w-xs" />
                            </div>
                            <div class="label">
                                <span class="label-text">Re-enter Password</span>
                            </div>
                            <div class="relative">
                                <input type="password" class="input input-sm input-bordered w-full max-w-xs" />
                            </div>
                        </label>
                        <div class="flex flex-wrap card-actions justify-center">
                            <button class="btn btn-primary w-full text-xl">Sign Up</button>
                            <button class="btn btn-link w-full">Already have account?</button>
                            <button class="btn btn-secondary text-xl w-1/2">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-layout>