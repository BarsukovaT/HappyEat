fetch('JSON/recetas_es.json')
    .then(response => response.json())
    .then(data => {
        let container = document.querySelector('.all_recets');
        //adding title
        let title = document.createElement('h2');
        title.innerText = data.title;
        container.appendChild(title);

        //adding food category
        data.content.forEach(foodCategory => {
            let foodCategoryContainer = document.createElement('div');
            foodCategoryContainer.className = 'food_category';

            // adding contents to food category container
            let foodCategoryTitle = document.createElement('h3');
            foodCategoryTitle.innerText = foodCategory.foodCategory;

            foodCategoryContainer.appendChild(foodCategoryTitle);

            let dishesContainer = document.createElement('div');
            dishesContainer.className = 'dish-container';

            // adding dishes to food category
            foodCategory.dishes.forEach(dish => {
                //define dish
                let dishContainer = document.createElement('div');
                dishContainer.className = 'dish';

                // define dish title
                let dishTitleContainer = document.createElement('div');
                dishTitleContainer.className = 'dish-title-container';

                let dishTitle = document.createElement('h4');
                dishTitle.className = 'dish-title';
                dishTitle.innerText = dish.title;

                dishTitleContainer.appendChild(dishTitle);

                // define image
                let image = document.createElement('div');
                image.className = 'dish-image';
                image.style.backgroundImage = "url("+dish.image+")";

                // define description
                let description = document.createElement('p');
                description.innerText = dish.description;

                // append elements to container
                dishContainer.appendChild(dishTitleContainer);
                dishContainer.appendChild(image);
                dishContainer.appendChild(description);

                // define ingredients container
                let ingredientsContainer = document.createElement('div');
                let ingredientsTitle = document.createElement('p');
                ingredientsTitle.innerText = dish.ingredients.title;
                let ingredientsList = document.createElement('ul');

                dish.ingredients.items.forEach(ingredient => {
                    let ingredientsItem = document.createElement('li');
                    ingredientsItem.innerText = ingredient;
                    ingredientsList.appendChild(ingredientsItem);
                })
                //append parts of ingredients list to container
                ingredientsContainer.appendChild(ingredientsTitle);
                ingredientsContainer.appendChild(ingredientsList);

                // append ingredients container to dish container
                dishContainer.appendChild(ingredientsContainer);

                //define calories element
                let caloriesContainer = document.createElement('div');
                let caloriesText = document.createElement('h5');
                caloriesText.innerText = dish.calories;

                caloriesContainer.appendChild(caloriesText);
                dishContainer.appendChild(caloriesContainer);

                //append dish to food category container
                dishesContainer.appendChild(dishContainer);
            });
            foodCategoryContainer.appendChild(dishesContainer);
            container.appendChild(foodCategoryContainer);
        })

    })
    .catch(error => console.log(error));
