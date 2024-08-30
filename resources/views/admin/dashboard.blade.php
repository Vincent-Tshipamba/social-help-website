@extends('admin.layouts.app')

<div class="bg-gray-200 h-screen w-full dark:bg-gray-700 flex justify-center">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:py-24 lg:px-8">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
            <span class="block">Bienvenue sur votre tableau de bord</span>
        </h2>
        <p>Ci-dessous les statistiques enregistrees : </p>
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-4 mt-4">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg dark:bg-gray-900">
                <div class="px-4 py-5 sm:p-6">
                    <dl>
                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate dark:text-gray-400">
                            Nombre total d'appels lancés : </dt>
                        <dd class="mt-1 text-3xl leading-9 font-semibold text-indigo-600 dark:text-indigo-400">
                            {{ isset($socialhelps) ? $socialhelps : "" }}
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow sm:rounded-lg dark:bg-gray-900">
                <div class="px-4 py-5 sm:p-6">
                    <dl>
                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate dark:text-gray-400">
                            Nombre d'utilisateurs :
                        </dt>
                        <dd class="mt-1 text-3xl leading-9 font-semibold text-indigo-600 dark:text-indigo-400">
                            {{ isset($users) ? $users : '' }}
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow sm:rounded-lg dark:bg-gray-900">
                <div class="px-4 py-5 sm:p-6">
                    <dl>
                        <dt class="text-sm leading-5 font-medium text-gray-500 dark:text-gray-400">
                            Nombre de donateurs ayant répondu :
                        </dt>
                        <dd class="mt-1 text-3xl leading-9 font-semibold text-indigo-600 dark:text-indigo-400">
                            {{ isset($donateurs) ? $donateurs : '' }}
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow sm:rounded-lg dark:bg-gray-900">
                <div class="px-4 py-5 sm:p-6">
                    <dl>
                        <dt class="text-sm leading-5 font-medium text-gray-500 truncate dark:text-gray-400">
                            Montant total collecté :
                        </dt>
                        <dd class="mt-1 text-3xl leading-9 font-semibold text-indigo-600 dark:text-indigo-400">
                            {{ isset($donations) ? $donations : '' }}
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
