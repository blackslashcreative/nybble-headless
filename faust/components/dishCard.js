export default function DishCard({ dish }) {
  //console.log(restaurant.slug);
  return (
    <>
      <img src={dish?.dishFields.image?.node?.mediaItemUrl} />
      <div className="cardBody">
        <h2 className="itemName">{dish?.dishFields?.dishName}</h2>
        <p className="text-sm">{dish?.dishFields?.dishDescription}</p>
      </div>
    </>
  )
}