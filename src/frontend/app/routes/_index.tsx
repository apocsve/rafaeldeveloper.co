import type { MetaFunction } from "@remix-run/node";

export const meta: MetaFunction = () => {
  return [
    { title: "New Remix App" },
    { name: "description", content: "Welcome to Remix!" },
  ];
};

export default function Index() {
  return (
    <section className="section">
      <div className="container has-text-centered">
        <h1 className="title">
          Hello World
        </h1>
        <p className="subtitle">
          My first website with
          <strong className="has-text-primary">Bulma</strong>!
        </p>
      </div>
    </section>
  );
}