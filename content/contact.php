<div id="contact">
    <div class="container">
        <h2><?php echo __('Contact Us'); ?></h2>
        <?php if (!empty($errors)): ?>
            <div class="errors">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="../includes/process_form.php" method="POST">
            <label for="name"></label>
            <input type="text" name="name" id="name" placeholder="<?php echo __('Your Name'); ?>" required>
            <label for="email"></label>
            <input type="email" name="email" id="email" placeholder="<?php echo __('Your Email'); ?>" required>
            <label for="message"></label>
            <textarea name="message" id="message" placeholder="<?php echo __('Your Message'); ?>" required></textarea>
            <label for="phone"></label>
            <input type="tel" name="phone" id="phone" placeholder="<?php echo __('Your Phone (optional)'); ?>">
            <button type="submit" class="button"><?php echo __('Submit'); ?></button>
        </form>
    </div>
</div>
