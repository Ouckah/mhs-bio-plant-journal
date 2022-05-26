var createPlantButton = document.getElementById('create-plant-button');

createPlantButton.onclick = () =>
{
    var icon = createIcon();

    document.getElementsByClassName('icons')[0].appendChild(icon);
}

function createIcon()
{
    const icon = document.createElement("div");
    icon.classList.add("icon");

    const iconBackground = document.createElement("div");
    iconBackground.classList.add("icon-background");

    const iconImage = document.createElement("img");
    iconImage.src = "images/oak_tree.jpg";

    const iconName = document.createElement("h3");
    iconName.innerHTML = "Oak Tree Copy";

    const iconDescription = document.createElement("p");
    iconDescription.innerHTML = "The national tree of the USA";

    icon.appendChild(iconImage);
    icon.appendChild(iconBackground);
    icon.appendChild(iconName);
    icon.appendChild(iconDescription);

    return icon;

}