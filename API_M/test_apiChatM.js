// import OpenAI from "openai";
const { OpenAI } = require("openai");

const openai = new OpenAI({ apiKey: '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' });

async function main() {
  const completion = await openai.chat.completions.create({
    messages: [{ role: "system", content: "Donne moi la recette de la tarte au citron" }],
    model: "gpt-3.5-turbo",
  });

  console.log(completion.choices[0]);
}

main();