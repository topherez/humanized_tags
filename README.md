# Humanized Tags - a CakePHP helper
==============

### Overview
Humanized Tag lists in cakePHP.


***Usage (in your view):**

1. Drop the file into app/views/helpers

2. Add this to your view:
<?php echo $this->HumanizedTags->speak($latestThought['Tag'], array('key' => 'name', 'forceCaps' => true)); ?>