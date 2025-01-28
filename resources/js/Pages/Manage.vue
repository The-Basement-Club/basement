<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import SporkTable from "@/Components/Spork/Atoms/SporkTable.vue";

const headers = [
  {
    name: 'Name',
    accessor:'name'
  },
  {
    name: 'Amount',
    accessor: value => value?.amount ? value.amount.toLocaleString('en-US', {style: 'currency', currency: 'USD'}) : null
  },
  {
    name: 'Date',
    accessor: (value) => value?.date ? dayjs.utc(value.date).format("MMM DD, YYYY") : null
  },
  {
    name : 'Tags',
    accessor: value => value?.tags?.map(tag => tag.name.en)?.join(', ')
  }
]

const { transactions } = defineProps({
  transactions: {
    type: Object,
    required: true,
    default: () => ({})
  }
})
</script>

<template>
  <AppLayout title="Management">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Manage
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg">
          <SporkTable
              :headers="headers"
              :items="transactions"
              header="All your transactions"
              description="Transactions"
          />
        </div>
      </div>
    </div>
  </AppLayout>
</template>
