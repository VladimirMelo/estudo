import React, { useState } from "react";
import { Head, Link } from "@inertiajs/react";

export default function Welcome({ auth }) {

    return (
        <>
            <Head title="Bem vindo" />
            <header className="header">
                <h1>Meu site</h1>

                <div>{auth.user ? <p>Dashboard</p> : <p>Acessar</p>}</div>
            </header>
        </>
    );
}
