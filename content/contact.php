<div id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <form action="../includes/process_form.php" method="POST">
            <label for="name"></label>
            <input type="text" name="name" id="name" placeholder="Your Name" required>
            <label for="email"></label>
            <input type="email" name="email" id="email" placeholder="Your Email" required>
            <label for="message"></label>
            <textarea name="message" id="message" placeholder="Your Message" required></textarea>
            <label for="phone"></label>
            <input type="tel" name="phone" id="phone" placeholder="Your Phone (optional)">
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
