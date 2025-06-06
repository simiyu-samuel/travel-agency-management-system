<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FAQs - Arnachy Adventures</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-relaxed text-gray-800">

  <section class="max-w-4xl mx-auto py-12 px-6">
    <h2 class="text-3xl font-bold text-center text-green-800 mb-10">Frequently Asked Questions (FAQs)</h2>

    <!-- FAQ Item -->
    <div class="space-y-4">
      <!-- Repeat this block for each FAQ -->
      <div class="border border-gray-200 rounded-md bg-white shadow">
        <button class="w-full flex justify-between items-center px-4 py-4 text-left text-lg font-medium text-green-700 hover:bg-green-50 transition" onclick="toggleFAQ(this)">
          <span>Why should I use Arnachy Adventures to book a vacation?</span>
          <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 px-4">
          <p class="py-4 text-sm text-gray-700">Our travel agents eliminate all the headaches that come with the booking process of your trips or holidays. You just tell us your preferences, and we handle the rest!</p>
        </div>
      </div>

      <div class="border border-gray-200 rounded-md bg-white shadow">
        <button class="w-full flex justify-between items-center px-4 py-4 text-left text-lg font-medium text-green-700 hover:bg-green-50 transition" onclick="toggleFAQ(this)">
          <span>Can you work within a specified budget?</span>
          <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 px-4">
          <p class="py-4 text-sm text-gray-700">Yes, we work within all realistic budgets. Honest sharing of ideas helps us make the best recommendations tailored to your goals.</p>
        </div>
      </div>
            <div class="border border-gray-200 rounded-md bg-white shadow">
        <button class="w-full flex justify-between items-center px-4 py-4 text-left text-lg font-medium text-green-700 hover:bg-green-50 transition" onclick="toggleFAQ(this)">
          <span>How do I pay for a booking?</span>
          <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 px-4">
          <p class="py-4 text-sm text-gray-700">Once you log in to your account, select the payments option on the sidebar. Confirm your payments either via M-PESA or by card by filling the appropriate form for each case.
        </p>
        </div>
      </div>
            <div class="border border-gray-200 rounded-md bg-white shadow">
        <button class="w-full flex justify-between items-center px-4 py-4 text-left text-lg font-medium text-green-700 hover:bg-green-50 transition" onclick="toggleFAQ(this)">
          <span>How long will it take an agent to handle my booking request?</span>
          <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 px-4">
          <p class="py-4 text-sm text-gray-700">A booking can be completed as soon as you have paid the sum required to confirm your bookings, be it: flight, accommodation, and/or transportation bookings. It shouldn’t take more than 10 minutes after you confirm your payment. (Disclaimer: the timings could vary depending on the status of the various systems we work with, for example Kenya Airway’s flight booking system.)</p>
        </div>
      </div>

      <!-- Add more FAQ items in the same format below -->
    </div>
  </section>

  <script>
    function toggleFAQ(button) {
      const svgIcon = button.querySelector('svg');
      const content = button.nextElementSibling;
      const isOpen = content.classList.contains('max-h-0');

      // Close all other open FAQs
      document.querySelectorAll('.faq-answer').forEach(el => {
        if (el !== content) {
          el.classList.add('max-h-0');
          el.previousElementSibling.querySelector('svg').classList.remove('rotate-180');
        }
      });

      if (isOpen) {
        content.classList.remove('max-h-0');
        content.classList.add('max-h-[500px]');
        svgIcon.classList.add('rotate-180');
      } else {
        content.classList.remove('max-h-[500px]');
        content.classList.add('max-h-0');
        svgIcon.classList.remove('rotate-180');
      }
    }
  </script>

</body>
</html>
