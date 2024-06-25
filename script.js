// Stripe.js integration example
// Include Stripe.js in your HTML
// <script src="https://js.stripe.com/v3/"></script>

const stripe = Stripe("your-publishable-key");
const elements = stripe.elements();
const card = elements.create("card");
card.mount("#card-element");

document.querySelector("form").addEventListener("submit", async (event) => {
  event.preventDefault();

  const { token, error } = await stripe.createToken(card);

  if (error) {
    console.error(error);
  } else {
    const form = document.querySelector("form");
    const hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("name", "stripeToken");
    hiddenInput.setAttribute("value", token.id);
    form.appendChild(hiddenInput);
    form.submit();
  }
});
