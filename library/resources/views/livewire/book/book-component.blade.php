<div>

    @foreach ($books as $book)        
        <article data-aos="fade-up">
            <a href="" class="relative overflow-hidden group ">
                <div class="">
                    <img loading="lazy" class="w-full"
                        src="https://cdn.prod.website-files.com/63a9fb94e473f36dbe99c1b1/65bbd52fd9e51475c21ab300_87pemVNSYiVQZWy4uJ9c.webp"
                        alt="">
                </div>
                <div class="absolute bottom-0 p-2 bg-gradient-to-t from-slate-900 h-[100%] w-[100%]">
                    <div class="ralative">
                        <div class="absolute bottom-2">
                            <h4 class="text-1xl font-bold text-slate-100">Book Name</h4>
                            <div
                                class="w-16 h-1 bg-gradient-to-l from-fuchsia-800 to-purple-800 rounded-full transform group-hover:w-[90%] duration-300">
                            </div>
                            <p
                                class="text-sm mt-2 max-h-0 overflow-hidden text-white text-sm group-hover:opacity-80 group-hover:max-h-[1000px] transform duration-500">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis consectetur
                                quos!</p>
                        </div>
                    </div>
                </div>
            </a>
        </article>
    @endforeach
    
</div>
