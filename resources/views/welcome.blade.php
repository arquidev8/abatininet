<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dr. Antoni Abat i Ninet - Portfolio Académico</title>
    @vite('resources/css/app.css')
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-800 dark:bg-black dark:text-white/50">

    <nav class="bg-gradient-to-r from-blue-800 to-indigo-900 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex items-center justify-center h-16"> <!-- Cambiado a justify-center -->
            <div class="hidden md:block">
              <div class="flex items-center justify-center space-x-4"> <!-- Añadido justify-center -->
                <a href="#about" class="text-white hover:bg-indigo-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">Sobre mí</a>
                <a href="#research" class="text-white hover:bg-indigo-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">Investigación</a>
                <a href="#publications" class="text-white hover:bg-indigo-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">Publicaciones</a>
                <a href="#contact" class="text-white hover:bg-indigo-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">Contacto</a>
              </div>
            </div>
            <div class="md:hidden absolute right-0 mr-4"> <!-- Posicionado a la derecha -->
              <button type="button" class="bg-indigo-600 inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Abrir menú principal</span>
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      
        <div class="md:hidden" id="mobile-menu">
          <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#about" class="text-white hover:bg-indigo-500 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Sobre mí</a>
            <a href="#research" class="text-white hover:bg-indigo-500 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Investigación</a>
            <a href="#publications" class="text-white hover:bg-indigo-500 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Publicaciones</a>
            <a href="#contact" class="text-white hover:bg-indigo-500 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contacto</a>
          </div>
        </div>
      </nav>

    <header class="bg-gradient-to-r from-blue-800 to-indigo-900 text-white py-12">
        <div class="container mx-auto px-6 flex flex-col items-center">
            <img src="https://i.postimg.cc/X7VXgXh1/Whats-App-Image-2020-05-19-at-11-43-05-580x580-removebg-preview.png" 
                 alt="Dr. Antoni Abat i Ninet" 
                 class="w-64 h-64 md:w-80 md:h-80 object-cover mb-8 rounded-full shadow-lg">
            <h1 class="text-4xl md:text-6xl font-bold mb-2 text-center">Dr. Antoni Abat i Ninet Ph.D.</h1>
            <img src="https://i.postimg.cc/RCyZBh7y/firma-blanco.png" alt="">
            {{-- <p class="text-xl mb-4 text-center">Constitutional Law, Founding Principles of the EU, Fundamental Rights and Public Law, Theory of Democracy.</p>
            <p class="text-lg mb-8 text-center">MARÍA ZAMBRANO FELLOW, UAB</p> --}}
             <p class="text-xl mb-4 text-center">Talent Distinguished Researcher - (Banco de Santander)
              Institut d'Estudis Europeus - Universitat Autònoma de Barcelona</p>
              <p class="text-xl mb-4 text-center">Constitutional Law, EU Principles and Values, Theory of Democracy, Political Philosophy, Climate Justice.
              </p>
          
            <a href="#contact" class="bg-white text-blue-800 py-2 px-6 rounded-full text-lg font-semibold hover:bg-blue-100 transition duration-300">Contactar</a>
        </div>
    </header>
    
    

    <main class="container mx-auto px-6 py-8">
        <section id="about" class="py-16 bg-gradient-to-br from-gray-50 to-blue-100 dark:from-gray-900 dark:to-blue-900">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
              <h2 class="text-4xl font-bold mb-12 text-center text-blue-500 dark:text-white">About Me</h2>
              <div class="flex flex-col lg:flex-row items-center justify-center space-y-8 lg:space-y-0 lg:space-x-12">
                <div class="w-full lg:w-1/3 flex justify-center">
                  <div class="relative w-64 h-64 lg:w-80 lg:h-80">
                    <img src="https://i.postimg.cc/TPQtpKz8/antoni-abat-ninet-1.jpg" alt="Dr. Antoni Abat i Ninet" class="rounded-full w-full h-full object-cover shadow-xl">
                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-blue-400 to-indigo-600 opacity-20"></div>
                  </div>
                </div>
                <div class="w-full lg:w-2/3">
                  <p class="text-lg leading-relaxed text-gray-700 dark:text-gray-300 text-justify">
                    Antoni Abat i Ninet is currently a visiting professor at the Faculty of Law of the Hebrew University of Jerusalem (Israel). Antoni graduated in Law from the University of Girona in 2001 and was awarded a PhD by the University of Barcelona in 2007. Before joining ESADE faculty of law in 2011, he was granted the Juan de la Cierva competitive research scholarship by Spain’s Ministry for Science and Innovation. He taught Comparative Constitutional Law and Ancient Constitutionalism at the State University of New York, the Lincoln Law School of San José and was Visiting Scholar at Stanford University Law School. In 2012, professor Abat joined the CTLS of the law school of Georgetown University where he taught Comparative Constitutional Law and Human Rights. From 2013 to 2020, Antoni has been a full professor and chair of comparative constitutional law at the faculty of law at the University of Copenhagen (Denmark).
                  </p>

                  {{-- <p class="text-lg leading-relaxed text-gray-700 dark:text-gray-300 text-justify">
                    Antoni Abat i Ninet is a Talent Fellowship - Distinguished Researcher at the UAB, and it was visiting professor at the Faculty of Law of the Hebrew University of Jerusalem (Israel) and a Faculty Affiliate at the Edwin Jaeckle Centre of Law, Democracy and Governance (SUNY at Buffalo). Prof. Abat is also a researcher at the Arial University Center for the Research and Study of Genocide.
                    <br><br>
                    Antoni graduated in Law from the University of Girona in 2001 and was awarded a PhD by the University of Barcelona in 2007. He joined ESADE faculty of law in 2011 when he was granted the Juan de la Cierva competitive research scholarship by Spain’s Ministry for Science and Innovation. Antoni has taught Comparative Constitutional Law and Ancient Political Thought at the State University of New York, and the Lincoln Law School of San José and was Visiting Scholar at Stanford University Law School. He has taught several courses on the History of Philosophy, the History of Political Systems and Political Philosophy at the Faculty of Philosophy at the Universitat of Barcelona and the EGLS.
                    <br><br>
                    In 2012, professor Abat joined the CTLS of the law school of Georgetown University.
           
                    From 2013 to 2020, Antoni was a full professor and chair of comparative constitutional law at the faculty of law at the University of Copenhagen (Denmark).
           
                    Antoni’s research interests lie in the intersection between constitutional and EU law, philosophy and Democracy. 
             
                    Antoni has obtained a grant to participate in the following international conferences and workshops and has multiple publications in the most important law and philosophy journals and book editors. 
                </p> --}}
                
                  {{-- <div class="mt-8 flex flex-wrap justify-center lg:justify-start gap-4">
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                      Ver publicaciones
                    </a>
                    <a href="#" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                      Contactar
                    </a>
                  </div> --}}
                </div>
              </div>
            </div>
          </section>

         

          <section id="research" class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
              <h2 class="text-4xl font-bold mb-12 text-center text-blue-500 dark:text-white">Antoni's research interests</h2>
              
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <div class="p-6">
                    <div class="text-blue-600 dark:text-blue-400 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                      </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">CONSTITUTIONAL LAW</h3>
                    <p class="text-gray-600 dark:text-gray-300">Comparative analysis of constitutional systems and their evolution.</p>
                  </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <div class="p-6">
                    <div class="text-blue-600 dark:text-blue-400 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                      </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">FUNDAMENTAL RIGHTS / META-CONSTITUTIONAL PRINCIPLES</h3>
                    <p class="text-gray-600 dark:text-gray-300">Study of meta-constitutional principles and their application.</p>
                  </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <div class="p-6">
                    <div class="text-blue-600 dark:text-blue-400 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                      </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">PHILOSOPHY</h3>
                    <p class="text-gray-600 dark:text-gray-300">Exploration of philosophical concepts in legal and political contexts.</p>
                  </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <div class="p-6">
                    <div class="text-blue-600 dark:text-blue-400 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">HUMAN RIGHTS</h3>
                    <p class="text-gray-600 dark:text-gray-300">Research on the protection and promotion of human rights.</p>
                  </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <div class="p-6">
                    <div class="text-blue-600 dark:text-blue-400 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                      </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">THEORY OF DEMOCRACY</h3>
                    <p class="text-gray-600 dark:text-gray-300">Research on democratic models and citizen participation.</p>
                  </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <div class="p-6">
                    <div class="text-blue-600 dark:text-blue-400 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                      </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">LEGAL THEOLOGY</h3>
                    <p class="text-gray-600 dark:text-gray-300">Study of the intersections between law and theology.</p>
                  </div>
                </div>
                
              </div>


              <div class="mt-10 mb-20 bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 md:col-span-2 lg:col-span-1">
                <div class="p-10">
                  <div class="text-blue-600 dark:text-blue-400 mb-4 flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                  </div>
                  <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white text-center">PRIVATE INTERNATIONAL LAW</h3>
                  <p class="text-gray-600 dark:text-gray-300 text-center">Analysis of legal issues arising from private relationships across different legal systems.</p>
                </div>
              </div>
            </div>
            </section>

    


          <section id="publications" class="py-16 bg-gradient-to-br from-gray-50 to-blue-100 dark:from-gray-900 dark:to-blue-900">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
              <h2 class="text-4xl font-bold mb-12 text-center text-blue-500 dark:text-white">BOOKS</h2>
              <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <img src="https://i.postimg.cc/2yTWxWxm/1.png" alt="Constitutional Crowdsourcing" class="w-full h-64 object-cover">
                  <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Constitutional Crowdsourcing</h3>
                  </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <img src="https://i.postimg.cc/cJqvwTNw/2.png" alt="The Arab Spring" class="w-full h-64 object-cover">
                  <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Revolution, transition, memory and oblivion</h3>
                  </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <img src="https://i.postimg.cc/wvg3bvMB/3.png" alt="Constitutional Violence" class="w-full h-64 object-cover">
                  <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">The Arab Spring</h3>
                  </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <img src="https://i.postimg.cc/gj0jmTvF/4.png" alt="Book 4" class="w-full h-64 object-cover">
                  <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Constitutional Violence</h3>
                  </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <img src="https://i.postimg.cc/PJFxxQ4L/5.png" alt="Book 5" class="w-full h-64 object-cover">
                  <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">El Estatuto jurídico de los magistrados del Tribunal Constitucional Español</h3>
                  </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <img src="https://i.postimg.cc/tCYJc8qF/6.png" alt="Book 6" class="w-full h-64 object-cover">
                  <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Hem guanyat, hem perdut</h3>
                  </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <img src="https://i.postimg.cc/HLCLVxQt/7.png" alt="Book 7" class="w-full h-64 object-cover">
                  <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Teoria iusfilosòfica de Jürgen Habermas. Complementació amb l'obra de Bruce Ackerman</h3>
                  </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                  <img src="https://i.postimg.cc/0NyzN3bB/8.png" alt="Book 7" class="w-full h-64 object-cover">
                  <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Teoria iusfilosòfica de Jürgen Habermas. Complementació amb l'obra de Bruce Ackerman</h3>
                  </div>
                </div>
               
              </div>
            </div>
          </section>



          <section id="research" class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
           
              
              <!-- Key Papers / Chapters -->
              <div class="mb-12">
              
                
                <section id="research" class="py-16 bg-gradient-to-br from-gray-50 to-blue-100 dark:from-gray-900 dark:to-blue-900">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                      <h2 class="text-4xl font-bold mb-12 text-center text-blue-500 dark:text-white">Research</h2>
                      
                      <div class="mb-12">
                        <h3 class="text-2xl font-semibold mb-6 text-blue-500 dark:text-white">Key Papers / Chapters</h3>
                        
                        <!-- Book Chapters -->
                        <div class="mb-8">
                          <h4 class="text-xl font-semibold mb-4 text-blue-500 dark:text-gray-300">Book Chapters</h4>
                          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <a href="#" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Referendum in Catalonia?</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">in THE LIMITS AND LEGITIMACY OF REFERENDA (Richard Albert and Richard Stacey ed.), (Oxford University Press)</p>
                            </a>
                            <a href="https://www.cambridge.org/core/books/abs/transnational-solidarity/transnational-claims-in-the-european-union-and-the-founding-principle-of-solidarity/89F5B7698197C4C0D04C6C64A21266FA" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Transnational claims in the European Union</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">in TRANSNATIONAL SOLIDARITY (Petersen, Krunke and Manners, eds.), (Cambridge University Press 2020)</p>
                            </a>
                            <a href="https://link.springer.com/referenceworkentry/10.1007/978-3-319-28082-0_10" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Human Dignity in Denmark</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">in HANDBOOK OF HUMAN DIGNITY IN EUROPE (Paolo Becchi and Klaus Mathis, eds.) (Springer Verlag, 2018)</p>
                            </a>
                            <a href="https://www.taylorfrancis.com/chapters/edit/10.4324/9781351038980-5/legal-theology-imposed-constitutionalism-antoni-abat-ninet" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Legal theology in imposed constitutionalism</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">in THE LAW AND LEGITIMACY OF IMPOSED CONSTITUTIONALISM, (Albert, Contiades and Fotiadou, eds.), (Routledge, 2018)</p>
                            </a>
                            <a href="https://www.elgaronline.com/view/edcoll/9781785365850/9781785365850.00018.xml" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">The role of judiciary in Egypt's failed transition to democracy</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">in JUDGES AS GUARDIANS OF CONSTITUTIONALISM AND HUMAN RIGHTS, (Scheinin, Krunke & Aksenova, eds.), (Edward Elgar 2017)</p>
                            </a>
                          </div>
                        </div>
                        
                        <!-- Selected Papers -->
                        <div>
                          <h4 class="text-xl font-semibold mb-4 text-blue-500 dark:text-gray-300">Selected Papers</h4>
                          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <a href="https://brill.com/view/journals/ijgr/aop/article-10.1163-15718115-BJA10030/article-10.1163-15718115-BJA10030.xml?language=en" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Diversity, Autonomy and Solidarity in Multinational States</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">Current Developments in The Spanish-Catalans and the Jews-Arabs Political Disputes, with Hilly Moodrick Even-Ken, INTERNATIONAL JOURNAL ON MINORITY AND GROUP RIGHTS, Vol.XX(2020)1-40</p>
                            </a>
                            <a href="https://www.degruyter.com/document/doi/10.1515/icl-2020-0015/html" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Kelsen vs Schmitt and the role of sub-national entities</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">and minorities in the appointment of constitutional judges in continental systems, VIENNA JOURNAL OF INTERNATIONAL CONSTITUTIONAL LAW, 1/2021</p>
                            </a>
                            <a href="https://revistes.eapc.gencat.cat/index.php/rcdp/article/view/10.2436-rcdp.i61.2020.3403" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">The non-solidary response to the humanitarian crisis</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">Jeopardising the European Union's constitutional imaginary and political logos, with Acar Kutay, REVISTA CATALANA DE DRET PUBLIC, vol. 61.4 (2020) 99-111</p>
                            </a>
                            <a href="https://www.scielo.br/j/rinc/a/npZK5ms5xL4L66FtgWjGHCk/?format=html" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">The inexorableness of constitutional amendments and its democratic potentiality</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">REVISTA DE INVESTIGAÇÕES CONSTITUCIONAIS, JOURNAL OF CONSTITUTIONAL RESEARCH. 7.3 (2020) 689-705</p>
                            </a>
                            <a href="https://dialnet.unirioja.es/servlet/articulo?codigo=7367121" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Un diálogo crítico sobre las constituciones revolucionarias de Bruce Ackerman</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">REVISTA ESPAÑOLA DE DERECHO CONSTITUCIONAL, 108 (2020) 333-345</p>
                            </a>
                            <a href="https://revista-estudios.revistas.deusto.es/article/view/1825/2249" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">(De) constructing and Desmitifying European's Union Founding Value of Solidarity</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">DEUSTO LEGAL JOURNAL, 68.1 (2020) 287-305</p>
                            </a>
                            <a href="https://tidsskrift.dk/nnjlsr/article/view/122156" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Protecting the Homo Digitalis</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">NORDIC JOURNAL OF LAW AND SOCIAL RESEARCH, 9 (2019) 153-170</p>
                            </a>
                            <a href="https://link.springer.com/article/10.1007/s11406-018-9994-5" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">The Messianic Thought of the Rule of Law in Constitutional Democracies</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">PHILOSOPHIA, PHILOSOPHICAL QUARTERLY OF ISRAEL 47.3 (2019) 733-755</p>
                            </a>
                            <a href="https://academic.oup.com/ajcl/article-abstract/66/1/229/4945459?redirectedFrom=fulltext" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Response to Prof. Mallat's review of the Arab Spring</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">(with Mark Tushnet) AMERICAN JOURNAL OF COMPARATIVE LAW, 66.1 (2018) 229-232</p>
                            </a>
                            <a href="https://www.elsevier.es/es-revista-cuestiones-constitucionales-revista-mexicana-derecho-113-articulo-la-constitucion-queretaro-revolucion-constitucion-S1405919318300234" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">La Constitución de Querétaro. Revolución y Constitución</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">aspectos originales y sugestivos desde la perspectiva del derecho constitucional comparado, CUESTIONES CONSTITUCIONALES, REVISTA MEXICANA DE DERECHO CONSTITUCIONAL 36 (2017) 271-299. (Spanish)</p>
                            </a>
                            <a href="https://academic.oup.com/icon/article/14/2/378/2526811%20%C2%A0" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Distinctive Identity Claims in Federal Systems: Judicial Policing of Subnational Variance</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">(with James Gardner), INTERNATIONAL JOURNAL OF CONSTITUTIONAL LAW ICON, 14.2. (2016) 378-410</p>
                            </a>
                            <a href="https://www.humanrights.dk/sites/humanrights.dk/files/media/migrated/2015.7._matters_of_concern_abat_2015.pdf" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Modernity, Rationality and Constitutional Law in Muslim-Majority Countries</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">DANISH INSTITUTE FOR HUMAN RIGHTS, (2015) 1-26</p>
                            </a>
                            <a href="https://journals.library.ualberta.ca/constitutional_forum/index.php/constitutional_forum/issue/view/1570" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">L'activisme judiciaire, le prix de la transaction démocratique en Espagne</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">CONSTITUTIONAL FORUM, Vol. 23.2 (2014)</p>
                            </a>
                            <a href="https://www.tandfonline.com/doi/abs/10.5235/09615768.25.2.255" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Constitutionalising language: a dialogue</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">25 2 KING'S LAW JOURNAL, (2014)</p>
                            </a>
                            <a href="https://academic.oup.com/ajcl/article-abstract/59/2/491/2571330?redirectedFrom=fulltext" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Sustainable Decentralization: Power, Extraconstitutional Influence and Subnational Symmetry in the United States and Spain</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">(with James A. Gardner), AMERICAN JOURNAL OF COMPARATIVE LAW, 59.2 (2011)</p>
                            </a>
                            <a href="#" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Demagogia and democratic loyalty instead of Oligogia and Constitutional Patriotism</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">VIENNA JOURNAL OF INTERNATIONAL CONSTITUTIONAL LAW, (2011)</p>
                            </a>
                            <a href="https://link.springer.com/article/10.1007/s11406-009-9210-8" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Playing at being Gods</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">PHILOSOPHIA, 38.1 (2010)</p>
                            </a>
                            <a href="https://www.academia.edu/54825744/Habermas_and_Ackerman_A_Synthesis_Applied_to_the_Legitimation_and_Codification_of_Legal_Norms" class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                              <h5 class="font-semibold text-gray-800 dark:text-white mb-2">Habermas and Ackerman, a synthesis applied to the legitimation in the codification process of juridical norms</h5>
                              <p class="text-sm text-gray-600 dark:text-gray-400">RATIO JURIS, AN INTERNATIONAL JOURNAL OF JURISPRUDENCE AND PHILOSOPHY OF LAW. 22.4. (2009)</p>
                            </a>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Selected Conferences section remains unchanged -->
                    </div>
                  </section>
              
              <!-- Selected Conferences -->
              <div>
                <h3 class="text-2xl font-semibold mb-6 text-gray-800 dark:text-white mt-10">Selected Conferences</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                    <h4 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Antoni Abat i Ninet – The Messianic thought of the rule of law</h4>
                    <a href="https://www.youtube.com/watch?v=HuuZlNomQbE" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-200" target="_blank">Watch Video</a>
                  </div>
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                    <h4 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">I-CONnect — Five Questions with Antoni Abat Ninet</h4>
                    <a href="https://www.youtube.com/watch?v=Z7LhIXSLnGA&t=75s" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-200" target="_blank">Watch Video</a>
                  </div>
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                    <h4 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Constitutional Crowdsourcing</h4>
                    <a href="https://www.youtube.com/watch?v=FsXvtj39bMs&t=38s" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-200" target="_blank">Watch Video</a>
                  </div>
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                    <h4 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Charla Antoni Abat: Controversias filosóficas: medidas legales y políticas en la pandemia. 6/4/2021</h4>
                    <a href="https://www.youtube.com/watch?v=l2wADkvcFrs&t=2607s" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-200" target="_blank">Watch Video</a>
                  </div>
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                    <h4 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Constitutional Order</h4>
                    <a href="https://www.youtube.com/watch?v=N4d9FtKlqbY&t=59s" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-200" target="_blank">Watch Video</a>
                  </div>
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                    <h4 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Conferència: «Les competències de les entitats subestatals en el nomenament de magistrats</h4>
                    <a href="https://www.youtube.com/watch?v=P4ybN0hKUtw" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-200" target="_blank">Watch Video</a>
                  </div>
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                    <h4 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Catalan Parliament Hearing</h4>
                    <a href="https://vimeo.com/167617925" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-200" target="_blank">Watch Video</a>
                  </div>
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                    <h4 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Vergadering Werkgroep Institutionele Zaken</h4>
                    <a href="https://www.youtube.com/watch?v=RK74mqf6nKY" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-200" target="_blank">Watch Video</a>
                  </div>
                </div>
              </div>
            </div>
          </section>



          <section id="honors-awards" class="py-16 bg-gradient-to-br from-gray-50 to-blue-100 dark:from-gray-900 dark:to-blue-900">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
              <h2 class="text-4xl font-bold mb-12 text-center text-blue-500 dark:text-white">Honors and Awards</h2>
              
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 transition-transform duration-300 hover:scale-105">
                  <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">2019</h3>
                  <ul class="list-disc list-inside text-gray-600 dark:text-gray-400">
                    <li>Rapporteur of the Konrad Adenauer Stiftung Rule of Law programme Middle East</li>
                    <li>Grant of the Minerva Center for the Rule of Law under Extreme Conditions, University of Haifa, Israel</li>
                  </ul>
                </div>
          
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 transition-transform duration-300 hover:scale-105">
                  <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">2018</h3>
                  <ul class="list-disc list-inside text-gray-600 dark:text-gray-400">
                    <li>Grant of the Melbourne Institute of Comparative Constitutional Law, Laureate Program</li>
                  </ul>
                </div>
          
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 transition-transform duration-300 hover:scale-105">
                  <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">2017</h3>
                  <ul class="list-disc list-inside text-gray-600 dark:text-gray-400">
                    <li>Grant of the University of Toronto, Canada</li>
                    <li>Grant of the Ministry of transparency of the Government of Catalonia</li>
                    <li>Grant of the Max Planck Institute and the University of Warsaw</li>
                    <li>Grant of the Public Diplomacy Council of Catalonia</li>
                  </ul>
                </div>
          
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 transition-transform duration-300 hover:scale-105">
                  <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">2016</h3>
                  <ul class="list-disc list-inside text-gray-600 dark:text-gray-400">
                    <li>Grant of the Islamic Legal Studies Harvard University Law School</li>
                  </ul>
                </div>
          
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 transition-transform duration-300 hover:scale-105">
                  <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">2015</h3>
                  <ul class="list-disc list-inside text-gray-600 dark:text-gray-400">
                    <li>Grant of the Faculty of Law of the University of Naples</li>
                    <li>Research grant from Instituts d'Estudis Autonòmics, Government of Catalonia</li>
                  </ul>
                </div>
          
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 transition-transform duration-300 hover:scale-105">
                  <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">2014</h3>
                  <ul class="list-disc list-inside text-gray-600 dark:text-gray-400">
                    <li>Grant of the European University Institute, Florence, Italy</li>
                    <li>Grant of the Diplocat, Public Diplomacy Council of Catalonia and the University of Iceland</li>
                  </ul>
                </div>
          
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 transition-transform duration-300 hover:scale-105">
                  <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">2011-2014</h3>
                  <ul class="list-disc list-inside text-gray-600 dark:text-gray-400">
                    <li>Juan de la Cierva Fellowship, Ministerio de Educación y Ciencia – Spanish Government (ranked 1)</li>
                  </ul>
                </div>
          
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 transition-transform duration-300 hover:scale-105">
                  <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">Earlier Awards</h3>
                  <ul class="list-disc list-inside text-gray-600 dark:text-gray-400">
                    <li>2011: Grant of the Univeristy Autònoma of Barcelona</li>
                    <li>2010: Director and coordinator of the Pluricity Research Program</li>
                    <li>2009: Centre d'estudis sobiranistes research grant</li>
                    <li>2007: Scholarship of the Bar association of Barcelona and Frankfurt am Main</li>
                  </ul>
                </div>
              </div>
            </div>



            <div class="mt-16 p-9">
                <h3 class="text-4xl font-bold mb-12 text-center text-blue-500 dark:text-white">Other Websites</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <a href="https://www.constjournal.com/article-author/antoni-abat-ninet/" target="_blank" rel="noopener noreferrer" class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 transition-transform duration-300 hover:scale-105 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    <span class="text-gray-800 dark:text-white">Constitutional Journal</span>
                  </a>
                  <a href="https://huji.academia.edu/AntoniAbatNinet" target="_blank" rel="noopener noreferrer" class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 transition-transform duration-300 hover:scale-105 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    <span class="text-gray-800 dark:text-white">Academia.edu Profile</span>
                  </a>
                  <a href="https://www.law.buffalo.edu/beyond/centers/jaeckle/people.html" target="_blank" rel="noopener noreferrer" class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 transition-transform duration-300 hover:scale-105 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    <span class="text-gray-800 dark:text-white">University at Buffalo Law School</span>
                  </a>
                  <a href="https://www.ariel.ac.il/wp/rsg/antoni-abat-i-ninet/#antoni" target="_blank" rel="noopener noreferrer" class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 transition-transform duration-300 hover:scale-105 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    <span class="text-gray-800 dark:text-white">Ariel University Profile</span>
                  </a>
                </div>
              </div>
            </div>
          </section>








        <section id="contact" class="bg-white p-8 rounded-lg shadow-md dark:bg-gray-800">
            <h2 class="text-4xl font-bold mb-12 text-center text-blue-500 dark:text-white">Contacto</h2>
            <form class="space-y-4">
                <div>
                    <label for="name" class="block mb-2">Nombre</label>
                    <input type="text" id="name" class="w-full p-2 border rounded dark:bg-gray-700 dark:border-gray-600">
                </div>
                <div>
                    <label for="email" class="block mb-2">Email</label>
                    <input type="email" id="email" class="w-full p-2 border rounded dark:bg-gray-700 dark:border-gray-600">
                </div>
                <div>
                    <label for="message" class="block mb-2">Mensaje</label>
                    <textarea id="message" rows="4" class="w-full p-2 border rounded dark:bg-gray-700 dark:border-gray-600"></textarea>
                </div>
                <button type="submit" class="bg-blue-800 text-white py-2 px-6 rounded-full hover:bg-blue-700 transition duration-300">Enviar</button>
            </form>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 Dr. Antoni Abat i Ninet. Todos los derechos reservados.</p>
            <div class="mt-4 flex justify-center space-x-4">
                <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-blue-400"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="hover:text-blue-400"><i class="fab fa-researchgate"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>