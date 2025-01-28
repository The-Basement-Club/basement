<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import Card from "@/Components/Spork/Atoms/Card.vue";

const { expiring_domains, servers } = defineProps({
  expiring_domains: {
    type: Array,
    required: true,
    default: () => []
  },
  servers: {
    type: Array,
    required: true,
    default: () => []
  }
})
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-4">
              <div class="w-1/4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                  <Card>
                    <template #body>
                      <div class="text-white p-4">
                        <div class="text-2xl font-bold">Expiring Domains</div>

                        <ul class="pt-4 w-full flex flex-col">
                          <li v-for="domain in expiring_domains" :key="domain.id" class="flex justify-between w-full">
                            <span>{{ domain.name }}</span>
                            <span>{{ domain.expires_at }}</span>
                          </li>
                        </ul>
                      </div>
                    </template>
                  </Card>
                </div>
              </div>

              <div class="w-1/4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                  <Card>
                    <template #body>
                      <div class="text-white p-4">
                        <div class="text-2xl font-bold">Domains</div>

                        <ul class="pt-4 w-full flex flex-col">
                          <li v-for="domain in expiring_domains" :key="domain.id" class="flex justify-between w-full">
                            <span>{{ domain.name }}</span>
                            <span>{{ domain.expires_at }}</span>
                          </li>
                        </ul>
                      </div>
                    </template>
                  </Card>
                </div>
              </div>


              <div class="w-1/4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                  <Card>
                    <template #body>
                      <div class="text-white p-4">
                        <div class="text-2xl font-bold">Servers</div>

                        <ul class="pt-4 w-full flex flex-col">
                          <li v-for="domain in servers" :key="domain.id" class="flex justify-between w-full">
                            <span>{{ domain.name }}</span>
                            <span>{{ domain.expires_at }}</span>
                          </li>
                        </ul>
                      </div>
                    </template>
                  </Card>
                </div>
              </div>


            </div>
        </div>
    </AppLayout>
</template>
