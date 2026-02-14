<x-public-layout>
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl sm:text-4xl font-bold text-center mb-12">Contact Us</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div>
                    <h2 class="text-2xl font-bold mb-6">Get in Touch</h2>
                    <p class="text-gray-600 mb-8">
                        Have questions about our courses or services? Feel free to reach out to us. We'd love to hear from you!
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div>
                                <h3 class="font-semibold">Visit Us</h3>
                                <p class="text-gray-600">Dolakha Nepal, Charikot</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <div>
                                <h3 class="font-semibold">Email Us</h3>
                                <p class="text-gray-600">gorkhabyteacademy@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <div>
                                <h3 class="font-semibold">Call Us</h3>
                                <p class="text-gray-600">+977 9865438982</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                     @if(session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-md">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="bg-gray-50 p-8 rounded-lg shadow-md">
                         @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>
                        </div>

                        <div class="mb-4">
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                            <input type="text" name="subject" id="subject" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea name="message" id="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required></textarea>
                        </div>

                        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 font-semibold">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
