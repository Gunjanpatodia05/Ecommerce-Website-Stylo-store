<?php
// Sample category data
$categories = array(
   
    array('id' => 1, 'name' => 'Clothing', 'description' => 'Fashionable clothing items', 'image' => 'img/products/f1.jpg')
);

// Function to get all categories
function getAllCategories($categories) {
    return $categories;
}

// Function to get a specific category by ID
function getCategoryById($categories, $categoryId) {
    foreach ($categories as $category) {
        if ($category['id'] == $categoryId) {
            return $category;
        }
    }
    return null;
}

// Usage example
echo "All Categories:\n";
$allCategories = getAllCategories($categories);
foreach ($allCategories as $category) {
    echo "ID: " . $category['id'] . "\n";
    echo "Name: " . $category['name'] . "\n";
    echo "Description: " . $category['description'] . "\n";
    echo "Image: " . $category['image'] . "\n";
    echo "-----------------\n";
}

echo "\nCategory with ID 2:\n";
$category = getCategoryById($categories, 2);
if ($category) {
    echo "ID: " . $category['id'] . "\n";
    echo "Name: " . $category['name'] . "\n";
    echo "Description: " . $category['description'] . "\n";
    echo "Image: " . $category['image'] . "\n";
} else {
    echo "Category not found\n";
}
?>
