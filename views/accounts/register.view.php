
<main>
    <div class='mx-auto max-w-7xl py-6 sm:px-6 lg:px-8'>
        <form class="mt-8 space-y-6" action="/accounts" method="POST">
            <div class="-space-y-px rounded-md shadow-sm">
                <div>
                    <label for="email" class="sr-only">Email address</label>
                    <input id="email" name="email" type="email" autocomplete="email" required
                           class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                           placeholder="Email address">
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                           class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                           placeholder="Password">
                </div>
            </div>
            <div class="-space-y-px rounded-md shadow-sm">
                <label for="privilegeLevel">Select Account Type:</label>
                <select name="privilegeLevel" id="privilegeLevel">
                    <option value=1>Student</option>
                    <option value=2>Tutor</option>
                    <option value=3>Admin</option>
                </select>
            </div>
            <div>
                <button type="submit"
                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    Register
                </button>
            </div>

            <ul>
                <?php if (isset($errors['email'])) : ?>
                    <li class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></li>
                <?php endif; ?>

                <?php if (isset($errors['password'])) : ?>
                    <li class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></li>
                <?php endif; ?>
            </ul>
        </form>
    </div>
</main>

