<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="/css/main.css">

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.2/dist/alpine.js" defer></script>

    </head>
    <body class="bg-gray-100 text-gray-800">
        <header class="border-t-4 border-blue-700 bg-white shadow-md">
            <nav class="container mx-auto px-4 flex items-center justify-between py-6">
                <ul class="flex">
                    <li><a href="#">Home</a></li>
                    <li class="ml-8"><a href="#">About</a></li>
                    <li class="ml-8"><a href="#">Contact</a></li>
                    <li class="ml-8"><a href="#">Blog</a></li>
                </ul>
                <div class="relative" x-data="{ isOpen: false }">
                    <button class="flex items-center" @click="isOpen = !isOpen" @keydown.escape="isOpen = false">
                        <img src="/avatar.jpg" alt="avatar" class="w-8 h-8 rounded-full">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" class="heroicon-ui"></path></svg>
                    </button>
                    <ul
                        class="absolute font-normal bg-white shadow overflow-hidden rounded w-48 border mt-2 py-1 right-0 z-20 transform origin-top-right"
                        x-show="isOpen"
                        @click.away="isOpen = false"
                        x-transition:enter="transition-all ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-75"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition-all ease-in duration-100"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-75"
                    >
                        <li>
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="text-gray-600"><path d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" class="heroicon-ui"></path></svg>
                                <span class="ml-2">Account</span>
                            </a>
                        </li>
                        <li class="border-b border-gray-400">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="text-gray-600"><path d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" class="heroicon-ui"></path></svg>
                                <span class="ml-2">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-gray-600"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path></svg><span class="ml-2">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container mx-auto px-4 xl:px-64 mt-12">
            <h2 class="text-2xl font-bold">FAQs</h2>
            <div
                class="leading-loose text-lg mt-6"
                x-data="{
                    faqs: [
                        {
                            question: 'Why do I need Alpine JS?',
                            answer: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iure quas laudantium dicta impedit, est id delectus molestiae deleniti enim nobis rem et nihil. Magni consequuntur, suscipit voluptates, dolorem ut deserunt laboriosam repudiandae, alias vero minima delectus iure quasi id earum reiciendis est culpa autem commodi sed nisi hic. Impedit?',
                            isOpen: false,
                        },
                        {
                            question: 'Why am I so awesome?',
                            answer: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cumque, nulla harum aspernatur veniam ullam provident neque temporibus autem itaque odit modi magnam fuga eius quidem vel dolor non, aperiam hic, porro possimus veritatis numquam et! Animi nihil dolorem in, quis harum possimus numquam incidunt reprehenderit repellendus, maxime ut, nulla.',
                            isOpen: false,
                        },
                    ]
                }"
            >
                <template x-for="faq in faqs" :key="faq">
                    <div>
                        <button
                            @click="faq.isOpen = !faq.isOpen"
                            class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                        >
                            <div x-text="faq.question"></div>
                            <svg x-show="!faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                            <svg x-show="faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>

                        </button>
                        <div
                            class="text-gray-700 mt-2 transform origin-top"
                            x-show="faq.isOpen"
                            x-transition:enter="transition-all ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-75"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition-all ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-75"
                            x-text="faq.answer"
                        >
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <div class="container mx-auto px-4 xl:px-64 mt-12 mb-12" x-data="{ tab: 'tab1' }">
            <h2 class="text-2xl font-bold">Tabs</h2>
            <ul class="flex border-b mt-6" >
                <li class="-mb-px mr-1">
                    <a
                        class="inline-block rounded-t py-2 px-4 font-semibold hover:text-blue-800"
                        :class="{ 'bg-white text-blue-700 border-l border-t border-r' : tab === 'tab1' }"
                        href="#"
                        @click.prevent="tab = 'tab1'"
                    >Tab 1</a>
                </li>
                <li class="-mb-px mr-1">
                    <a
                        class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        :class="{ 'bg-white text-blue-700 border-l border-t border-r' : tab === 'tab2' }"
                        href="#"
                        @click.prevent="tab = 'tab2'">Tab 2</a
                    >
                </li>
                <li class="-mb-px mr-1">
                    <a
                        class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        :class="{ 'bg-white text-blue-700 border-l border-t border-r' : tab === 'tab3' }"
                        href="#" @click.prevent="tab = 'tab3'">Tab 3</a
                    >
                </li>
            </ul>
            <div class="content bg-white px-4 py-4 border-l border-r border-b pt-4">
                <div x-show="tab === 'tab1'">
                    Tab1 content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sunt, consectetur eos quod perferendis mollitia consequuntur natus, porro molestiae qui iusto deserunt rerum tempore voluptatum itaque. Ad, nisi esse cum quidem consequuntur ullam obcaecati id facere beatae accusamus. Exercitationem atque consequatur enim accusantium necessitatibus, iure optio omnis minima consequuntur earum ab nihil, ea, rerum dolor maxime! Voluptatibus, dolore. Et tempore consectetur aut possimus beatae atque harum nemo sed nisi suscipit quia esse, obcaecati? Expedita commodi laboriosam esse dolorem debitis fugiat aspernatur, quidem laudantium? Tempore, doloremque autem culpa ad earum veniam odio sed, cupiditate possimus quidem veritatis et ex nisi vitae!
                </div>
                <div x-show="tab === 'tab2'">
                    Tab2 content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sunt, consectetur eos quod perferendis mollitia consequuntur natus, porro molestiae qui iusto deserunt rerum tempore voluptatum itaque. Ad, nisi esse cum quidem consequuntur ullam obcaecati id facere beatae accusamus. Exercitationem atque consequatur enim accusantium necessitatibus, iure optio omnis minima consequuntur earum ab nihil, ea, rerum dolor maxime! Voluptatibus, dolore. Et tempore consectetur aut possimus beatae atque harum nemo sed nisi suscipit quia esse, obcaecati? Expedita commodi laboriosam esse dolorem debitis fugiat aspernatur, quidem laudantium? Tempore, doloremque autem culpa ad earum veniam odio sed, cupiditate possimus quidem veritatis et ex nisi vitae!
                </div>
                <div x-show="tab === 'tab3'">
                    Tab3 content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sunt, consectetur eos quod perferendis mollitia consequuntur natus, porro molestiae qui iusto deserunt rerum tempore voluptatum itaque. Ad, nisi esse cum quidem consequuntur ullam obcaecati id facere beatae accusamus. Exercitationem atque consequatur enim accusantium necessitatibus, iure optio omnis minima consequuntur earum ab nihil, ea, rerum dolor maxime! Voluptatibus, dolore. Et tempore consectetur aut possimus beatae atque harum nemo sed nisi suscipit quia esse, obcaecati? Expedita commodi laboriosam esse dolorem debitis fugiat aspernatur, quidem laudantium? Tempore, doloremque autem culpa ad earum veniam odio sed, cupiditate possimus quidem veritatis et ex nisi vitae!
                </div>
            </div>
        </div>
    </body>
</html>
