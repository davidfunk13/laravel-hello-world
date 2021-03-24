<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 flex-column justify-center pt-8 sm:justify-start sm:pt-0">
                <h1 style="font-size: 4em">Hello, World!</h1>
                <h2 style="font-size: 2em">Here's some of my stuff.</h2>
                <strong><a href="https://github.com/davidfunk13/">https://github.com/davidfunk13/</a></strong>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <!-- Sr Tracker Old -->
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://github.com/davidfunk13/sr-tracker-3" class=" underline text-gray-900 dark:text-white">Skill Rating Tracker (old)</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <p>This project was my first go at a skill rating tracker for Blizzard's popular game, Overwatch. </p>
                                <br>
                                <ul>
                                    <li><strong>1. Link battletag (Battle.Net Account) to Sr Tracker account.</strong></li>
                                    <li><strong>2. Create Sessions of a specific role.</strong></li>
                                    <li><strong>3. Start tracking wins, loses ties, skill rating, maps played, and any other statistics related to the game. </strong></li>
                                </ul>
                                <br>
                                <p>
                                    This is a near complete, functional, but abandoned project currently being rebuilt with a different stack.
                                </p>
                                <br>
                                <p>
                                    This project is also a web scraping project that reaches out to blizzards website, scrapes profile stats, and returns them in data tables based off of search criterea and rulesets.
                                </p>
                                <br>
                                <h2 style="font-weight: bold">Built With: NodeJS, Express, GraphQL, MongoDB, React, Material UI, and Auth0.</h2>
                                <br>
                                <h2 style="font-weight: bold">Deployed: <a href="https://sr-tracker-3.herokuapp.com">HERE</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- Overwatch Companion API -->
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://github.com/davidfunk13/overwatch-companion" class="underline text-gray-900 dark:text-white">Overwatch Companion API</a></div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <p>This is the decoupled JSON api for my final work in progress of a companion app (Skill rating tracker) for Blizzard's Overwatch that addressed a lot of the issues I had with the first version.</p>
                                <br>
                                <ul>
                                    <li><strong>1. Is now a seperate project, for easier maintenance and readability.</strong></li>
                                    <li><strong>2. Friendly dev environment.</strong></li>
                                    <li><strong>2. Demonstrates understanding of CORS.</strong></li>
                                    <li><strong>3. Much faster, built in Golang using mostly standard package libraries.</strong></li>
                                    <li><strong>3. OAuth 2.0 PKCE with Auth0 </strong></li>
                                </ul>
                                <br>
                                <p>
                                    This api has all of the same features as the older project, but the project is much improved in every way; from project structure, to performance, to code read and maintainability.
                                </p>
                                <br>
                                <h2 style="font-weight: bold">Built With: Golang, GraphQL, MySQL and Auth0. Hosted on Heroku.</h2>
                                <br>
                                <h2 style="font-weight: bold">Code: <a href="https://github.com/davidfunk13/overwatch-companion">HERE</a></h2>

                            </div>
                        </div>
                    </div>

                    <!-- Overwatch Companion Client -->
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://github.com/davidfunk13/overwatch-companion-client" class="underline text-gray-900 dark:text-white">Overwatch Companion Client</a></div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <strong>WORK IN PROGRESS</strong>
                                <br>
                                <br>
                                <p>This is the client-side React app for my final work in progress of a companion app (Skill rating tracker) for Blizzard's Overwatch that addressed a lot of the issues I had with the first version.</p>
                                <br>
                                <ul>
                                    <li><strong>1. Is now a seperate project, for easier maintenance and readability.</strong></li>
                                    <li><strong>2. I am using Ant Desgin over Material UI because of their more complete component library (incuding charting sister libraries), and better, less cumbersome avenues for theme customization.</strong></li>
                                    <li><strong>3. Sessions will now support all roles, having a skill rating for each.</strong></li>
                                    <li><strong>4. Different application flow and UX, learning from past mistakes.</strong></li>
                                </ul>
                                <br>
                                <p>
                                    This api has all of the same features as the older project, but the project is much improved in every way; from project structure, to performance, to code read and maintainability.
                                </p>
                                <br>
                                <h2 style="font-weight: bold">Built With: React, Redux & Redux-toolkit and Auth0.</h2>
                                <br>
                                <h2 style="font-weight: bold">Deployed: <a href="https://overwatch-companion.netlify.app/">HERE</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- SyncerUp! -->
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 sm:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://github.com/davidfunk13/syncerup" class="underline text-gray-900 dark:text-white">SyncerUp!</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <strong>WORK IN PROGRESS</strong>
                                <br>
                                <br>
                                <p>Created out of a habit in Brad's gaming discord server of syncing funny videos to watch together, I got inspired to work on a project that would more easily allow us to do so.
                                    This project is in progress, and is to help me learn websockets to a decent degree of complexity by the time the project is done.</p>
                                <br>

                                <strong>Project goals:</strong>
                                <br>
                                <br>
                                <ul>
                                    <li><strong>1. Live chat, with rooms.</strong></li>
                                    <li><strong>2. A link to invite a new user to a room by generated url.</strong></li>
                                    <li><strong>3. An ability to load videos from Youtube, Vimeo, and other streaming sites.</strong></li>
                                    <li><strong>4. An ability to give a user ability to control video playback for all connected users, seeking, play, and pause functionality.</strong></li>
                                </ul>

                                <br>
                                <strong>Built with: NodeJS, SocketIO, React</strong>
                                <br>
                                <br>
                                <strong>Deployed: <a href="http://syncerup.herokuapp.com">HERE</a></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>

                        <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                            Shop
                        </a>

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>

                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>